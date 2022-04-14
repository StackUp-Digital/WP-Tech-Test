# Wordpress Technical Assessment

Thank you for taking the time to sit through our technical assessment for the position of **Wordpress Developer**. We will use this assessment to understand how competent you are with Wordpress and the languages we use at StackUp Digital.

Please read the documentation carefully, it contains the requirements for the test as well as information about submitting your code.

## Let's Begin 👨‍💻

Imagine that StackUp Digital have designed a website for a Cloud Service Provider. The client has requested that the website be developed on the Wordpress platform.

You have been assigned three requirements, each have been prioritised as per the [MoSCoW framework](https://www.agilebusiness.org/page/ProjectFramework_10_MoSCoWPrioritisation). There are two hard requirements (Must Have) and one soft requirement (Should Have).

To pass the assessment, you are expected to complete the Must Have requirements. If you have some available time to complete the Should Have requirement then go for it 💪

**👋 Hey, a quick heads up!** We estimate that you will need no more than three hours to complete the assessment.

## Submitting Your Code

When you're finished, you will need to raise a Pull Request against this repository. This will let us review your code locally whilst providing code feedback via Github. **Therefore, you must fork the repository, [you can do this by clicking here](https://github.com/StackUp-Digital/WP-Tech-Test/fork).**

## Compiling Assets

We have deliberately omitted the `dist/` folder from the repository. This folder will contain compiled CSS and JS. The theme uses Laravel Mix to compile assets and the views have been developed with TailwindCSS.

To work with Laravel Mix, please do the following:

1. Install the NPM dependencies with `npm` or `yarn`
2. Once the dependencies are installed, use the `watch` script to watch for file changes like so:

```
# Using npm? Run the following
npm run watch

# Using yarn? Run the following
yarn watch
```

Then you should be good to go 🎉

## The Requirements

In this repository, you will find the contents of a theme. The screenshot below shows you how the homepage template should appear in the browser once all assets have been compiled:

![Screenshot of the Homepage](https://github.com/StackUp-Digital/WP-Tech-Test/blob/main/screenshot.png?raw=true)

**The Homepage Template**

![Screenshot of the Page/Post Template](https://github.com/StackUp-Digital/WP-Tech-Test/blob/main/screenshot_two.png?raw=true)

**The Generic Page/Post Template**

If you have looked at the code already, you will notice that the content within each of these templates is static. Your task is to convert this static content into dynamic content that is driven by Wordpress, as per the requirements below.

**Note:** - we use Advanced Custom Fields for the majority of our Wordpress projects. Consequently, we will be looking for the use of ACF within your submission. Please note that we have included a `acf-json/` folder within the theme so that we can sync your schema to our local machines as part of our review. [More information on Local JSON can be found here](https://www.advancedcustomfields.com/resources/local-json/).

---

### Requirement One (Must Have) - Give me the ability to modify the Header and Footer Links through Wordpress

As a content editor, I want the ability to update header and footer links in Wordpress; so that I don't have to rely on developers when a link needs changing.

**Acceptance Criteria**

- There should be a separate Menu in Wordpress for Header and Footer
  - The header menu should only handle the products, features, marketplace and company links. **Do not worry about the logo, log in or start free trial.**
  - The header is responsive, but the mobile burger button does nothing when interacting with it in the mobile view. Write some Javascript that will replace the `.mob-menu-closed` class with `.mob-menu-open` against the `.mob-menu` element when the burger icon is clicked/tapped.
  - The footer menu should only handle the links within the following sections:
    - Solutions
    - Support
    - Company
    - Legal
    - **Do not worry about the social links or static text**

---

### Requirement Two (Must Have) - Give me the ability to modify the content within the Hero Unit

As a content editor, I want the ability to update the hero unit's content in Wordpress; so that I don't have to rely on developers when making modifications to the content.

**Acceptance Criteria**

- Content editors should be able to modify the following parts of the hero unit:
  - The title
  - The copy beneath the title
  - The pill above the title, which includes:
    - The text within the blue pill
    - The text next to it
    - The URL it points to
  - The visiblity of the email form
  - The text beneath the email form

---

### Requirement Three (Should Have) - Update the page/post templates

The `template-parts/` folder contains the code for the page and post content; both files currently contain static content. For this optional requirement, we would like you to replace the static content with dynamic content from Wordpress, without impacting the styles of the existing template.
