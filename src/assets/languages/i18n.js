// i18n.js
import { createI18n } from 'vue-i18n'

const messages = {
  en: {
    // Basic Buttons
    Portfolio: 'Portfolio',
    Advocacy: 'Advocacy',
    About: 'About',
    Contact: 'Contact',
    English: 'English',
    Espanol: 'Espanol',
    'Read More Button': 'Read More',
    'Close Button': 'Close',

    // Portfolio page
    // DIV 1
    'Portfolio Landing Header': 'Hi! I’m',
    'Portfolio Landing Description 1':
      'I help businesses grow through the power of digital marketing and creative strategy.',
    'Portfolio Landing Description 2': 'Learn more about my award-winning tactics and experience!',
    'Portfolio Landing Button': 'Get Started',

    // DIV 2
    'Portfolio Landing Project Header': 'PROJECTS',
    'Portfolio Landing Project Card One Header': 'Event Coordinator',
    'Portfolio Landing Project Card One Description':
      'Launched the “Team Liquid Tournament” an esports event with over $1,000 of prizes tournament garnered 500,000+ views across Live Streams and YouTube post streams, presented ideas for side events, community participation and more.',
    'Portfolio Landing Project Card One Description 1':
      'Coordinated with over 12+ influencer and commentary talent for interviews and participation while live.',
    'Portfolio Landing Project Card One Description 2':
      'Moderated Team Liquid Mobile discord server of 30,000 members.',
    'Portfolio Landing Project Card Two Header': 'Creative Project Lead',
    'Portfolio Landing Project Card Two Description':
      'Trained over 22 influencer talent accounts increasing our network following by over 700,000 combined.',
    'Portfolio Landing Project Card Two Description 1':
      'Directed all Internal content on YouTube, Twitter, Instagram, capturing over 15,000 new followers.',
    'Portfolio Landing Project Card Two Description 2':
      'Esports teams over 1 year time period competed for over $1,050,000+.',
    'Portfolio Landing Project Card Two Description 3':
      'Assisted in securing funding ($50,000+) and creating pitch decks for investors and sponsors.',
    'Portfolio Landing Project Card Two Description 4':
      'Negotiated in Spanish for new influencer talent and esports teams.',

    // DIV 3
    'Portfolio Landing Services Header': 'Services',
    'Portfolio Landing Services Card One Header': 'Social Media Management / Marketing',
    'Portfolio Landing Services Card One Description':
      'This service involves managing and maintaining your social media profiles on various platforms, such as Facebook, Twitter, Instagram, and LinkedIn. It also involves developing and executing a social media strategy to promote your business, brand, or product.',
    'Portfolio Landing Services Card One Modal Description':
      'I would be responsible for creating and curating content, scheduling posts, engaging with followers, and monitoring analytics to measure the success of the social media strategy. Moreover, I would be responsible for creating and curating content, scheduling posts, engaging with followers, and monitoring analytics to measure the success of the social media strategy. The goal of social media marketing is to increase brand awareness, generate leads, and drive traffic to the client`s website.',
    'Portfolio Landing Services Card Two Modal Description':
      'I would be responsible for identifying the target audience, developing ad copy and creative, setting up and monitoring the ad campaign, and analyzing the results to optimize the campaign for maximum ROI.',
    'Portfolio Landing Services Card Three Modal Description':
      'I would be responsible for creating design concepts, selecting images and typography, and producing high-quality graphics that align with the client`s brand and messaging.',
    'Portfolio Landing Services Card Four Modal Description':
      'I would be responsible for analyzing the client`s current marketing efforts, identifying opportunities for improvement, and developing a comprehensive plan for achieving their goals. I would also provide ongoing support and advice to ensure the client`s marketing and branding initiatives are successful.',
    'Portfolio Landing Services Card Two Header': 'Paid Social Ads',
    'Portfolio Landing Services Card Two Description':
      'This service involves creating and managing paid advertising campaigns on social media platforms such as Facebook, Instagram, Twitter, and LinkedIn.',
    'Portfolio Landing Services Card Three Header': 'Graphic Design',
    'Portfolio Landing Services Card Three Description':
      'This service involves creating visual content for various marketing materials such as social media posts, email campaigns, websites, and print materials.',
    'Portfolio Landing Services Card Four Header': 'Marketing / Branding Consulting',
    'Portfolio Landing Services Card Four Description':
      'This service involves providing strategic advice and guidance on marketing and branding initiatives to help clients achieve their business objectives.',
    'More about': 'More about',

    // DIV 4
    'Portfolio Landing Footer Header': 'LET`S START A PROJECT TOGETHER',
    'Portfolio Landing Footer Subheader': 'LOOKING FOR AN EXPERT',
    'Portfolio Landing Footer Button': 'TELL ME THE DETAILS',
    'Portfolio Landing Footer Ending Button': 'FOLLOW ME',
    'Portfolio Landing Footer Credits': '© Copyright. All rights reserved.',

    // Advocacy
    'Advocacy Experience Header': 'EXPERIENCE',
    'Advocacy Experience Description':
      'It`s the experience section dedicated to showcasing the projects that Mr. Favio has completed, providing a comprehensive overview of his roles, responsibilities, accomplishments, and relevant skills within each project.',
    'Advocacy Experience Card One Sitename': 'Buying.com',
    'Advocacy Experience Card One Position': 'Administrative Assistant',
    'Advocacy Experience Card One Description 1':
      'Leads group of customer service admins to monitor and serve over 31,0000 monthly delivery food orders.',
    'Advocacy Experience Card One Description 2':
      'Liaise with executive and senior administrative assistants to handle requests from senior management.',
    'Advocacy Experience Card One Description 3':
      'Lead and trained a team of sales reps to generate monthly sales of $100,000 gross software sales.',
    'Advocacy Experience Card One Description 4':
      'Write and distribute email, correspondence memos, letters, faxes and forms.',
    'Advocacy Experience Card Two Sitename': 'LetsPlott',
    'Advocacy Experience Card Two Position': 'Social Media Manager',
    'Advocacy Experience Card Two Description 1':
      'Managed a budget of $250,000 dollars in yearly ad spend on social media + e-commerce, which generated $37,500 in monthly gross sales revenue.',
    'Advocacy Experience Card Two Description 2':
      'Best in App honoree at CES 2022 for our newest advancements in XR and AR within our App, assisted in Awards submission, in app testing, taking photos, coordinating slides and more.',
    'Advocacy Experience Card Two Description 3':
      'Directed all content and strategy on TikTok, YouTube, Instagram and Facebook; Instagram engagement increase by 50%, 35 million global impressions combined.',
    'Advocacy Experience Card Two Description 4':
      'Front camera personality, hosted content series/pieces and sprouting new company culture.',
    'Advocacy Experience Card Two Description 5':
      'Plott is a group of creatives, engineers, inventors, military veteran designers, weekend warriors, and DIYers. Plott is based out of New Jersey with their own factory in Kunshan, China. Through working with construction professionals and our own DIY experiences, Plott understands it`s not easy to change your surroundings. Taking all the necessary measurements for your designs, then applying those designs to your living space is a complicated and time-consuming process. Plott makes smart tools that bring the real world into a visual app. There, you can design with dimensional context, then use our tools to help you install with dimensional guidance—all without the need for calculations.',
    'Advocacy Experience Card Three Sitename': 'TribeGaming',
    'Advocacy Experience Card Three Position': 'Social Media Specialist',
    'Advocacy Experience Card Three Description 1':
      'Executed social media strategy collaborating with influencers and talent in the “One Tribe Campaign” which amassed an increase of 50,000 followers across platforms over a 2 months span.',
    'Advocacy Experience Card Three Description 2':
      'Content strategy on @TribeGaming YouTube channel contributed to a total amassed 28,000,000 views over 6 months.',
    'Advocacy Experience Card Three Description 3':
      'Worked with high-level brands like Ford, San Antonio Spurs, and Razer to create sponsor activations, partnerships announcements, and more',
    'Advocacy Experience Card Three Description 4':
      'Trained and consulted on content with top creator talent, @OrangeJuiceGaming, @SirTagCR, @Godzly and more which led to accumulating over 500,000,000 views over TribeGaming network over a 6 months span.',
    'Advocacy Experience Card Three Description 5':
      'I took up a role at the most prestigious mobile gaming organizations assisting in social media and content creation and working alongside Cody Grey, collaborating with other peers to make some fantastic content for our fans to interact with, while also building Tribe Gaming`s brand voice and fulfilling objectives.',
    'Advocacy Experience Card Three Description 6':
      'Tribe Gaming is the largest mobile gaming esports organization in North America; point-blank. As the home of the biggest creators and best teams within mobile gaming, they have asserted themselves as the premier brand of the hottest-growing platform in gaming — mobile.',
    'Advocacy Experience Reminder': 'Reminder! I don`t know yet to put here, need to ask first.',
    'Advocacy Experience Button': 'GO TO SITE',

    // About
    'About Header': 'HI! I`M Favio-Valentino Jasso',
    'About Subheader': 'Marketing and Branding Expert',
    'About Owner Header': 'Who Am I?',
    'About Owner Short Description':
      'Favio Jasso is a Mexican-American marketer based in the New York Metropolitan area. Favio is accompanied by 4 years of experience working with high-profile entertainment brands like Team Liquid and the San Antonio Spurs.',
    'About Owner Long Description':
      'Additionally, he has achieved national recognition as CES 2022 honoree award and South by SouthWest nominee for best in innovation under the tech focus led brand LetsPlott. Favio`s marketing expertise has allowed him to expand into consulting influencer talent who have amassed six to seven-figure followings. Favio`s extensive industry experience has proven his intellect in regard to the neverending outlook of the marketing world.',

    // Contact
    'Contact Header': 'Let`s tell the story about your business.',
    'Contact Subheader': 'My goal?',
    'Contact Description':
      'To tell your business`s story in the best and most marketable way possible while achieving your marketing, branding, and advertising objectives.',
    'Field 1': 'Select Service',
    'Field 1 Message': 'Set up consulting Today!',
    'Field 2': 'Select Time',
    Monday: 'Mon',
    Tuesday: 'Tue',
    Wednesday: 'Wed',
    Thursday: 'Thur',
    Friday: 'Fri',
    Saturday: 'Sat',
    Sunday: 'Sun',
    Timezone: 'US Eastern standard time',
    'Field 3': 'Add you details',
    Name: 'Name',
    Email: 'Email',
    Address: 'Address',
    Phone: 'Phone Number',
    Notes: 'Notes (optional)',
    'Form Reminder': 'Please share some details about your project.',
    'Form Reminder 2': 'By clicking below you agree to these Privacy Policies',
    Form: 'Book Now'
  },
  es: {
    /* Spanish translations */
  }
}

const i18n = createI18n({
  legacy: false,
  globalInjection: true,
  locale: 'en',
  fallbackLocale: 'en',
  messages
})

export default i18n
