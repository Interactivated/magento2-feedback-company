# magento2-feedback-company

<br/>

⚡️ The module extends "The feedback company" module by adding a rest api endpoint to show the rating on   the site VSF  ⚡️

> https://bitbucket.org/feedbackcompany/magento2-app/src/master/

<br/>

### Important note!


**The module requires the installation of The Feedback Company Connect for Magento® 2 module in advance. Follow the installation instructions**

<br/>

## Contents

<br/>

- [Installation](#installation)

- [Usage](#usage)

- [Configuration](#configuration)


<br/>

## Installation

<br/>




### 1. Add the configuration of the module [FeedbackCompany_TheFeedbackCompany](https://bitbucket.org/feedbackcompany/magento2-app/src/master/) to the composer.json file

<br/>

```bash
composer config repositories.feedbackcompany-the-feedback-company git https://bitbucket.org/feedbackcompany/magento2-app.git
```

<br/>

### 2. Add the configuration of the module [Interactivated_TheFeedbackCompany](https://github.com/Interactivated/magento2-feedback-company) to the composer.json file

<br/>

```bash
composer config repositories.interactivated-magento2-feedback-company git https://github.com/Interactivated/magento2-feedback-company.git
```

<br/>

### 3. Install modules

<br/>

```bash
composer require feedbackcompany/the-feedback-company 1.2.1
composer require interactivated/magento2-feedback-company dev-master
bin/magento setup:upgrade
bin/magento cache:flush
```

<br/>


## Usage

<br/>


### You will need to configure your module in the admin panel according to the instructions. https://www.feedbackcompany.com/


