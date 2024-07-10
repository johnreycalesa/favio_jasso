import axios from 'axios'

export async function getContact() {
  try {
    const response = await axios.get('/contact')
    console.log(response.data)
    return response.data
  } catch (error) {
    console.error(error)
    throw error
  }
}

export async function postContact(contact) {
  try {
    const response = await axios.post('/contact', contact)
    console.log(response.data)
    return response.data
  } catch (error) {
    console.error(error)
    throw error
  }
}
