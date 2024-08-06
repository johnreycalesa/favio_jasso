import express from 'express'
import nodemailer from 'nodemailer'
import bodyParser from 'body-parser'
import cors from 'cors'

const app = express()
const port = 3000

app.use(bodyParser.json())
app.use(cors())
// app.use(
//   cors({
//     origin: 'https://www.faviojasso.com/'
//   })
// )

const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'johannaraymendoza@gmail.com',
    pass: 'pdonqajmdvwfuuao'
  }
})

app.post('/send-email', (req, res) => {
  const { name, email, message } = req.body

  const mailOptions = {
    from: 'johannaraymendoza@gmail.com',
    to: 'johannaraymendoza@gmail.com',
    subject: 'New Form Submission',
    text: `Name: ${name}\nEmail: ${email}\nMessage: ${message}`
  }

  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      return res.status(500).send(error.toString())
    }
    res.status(200).send('Email sent: ' + info.response)
  })
})

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`)
})
