<!-- [![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url] -->

<br />
<p align="center">
  <a href="https://github.com/Mizar-Contasti/zaroc">
    <img src="https://codexceleste.com/github/zaroc/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Zaroc - PHP Chatbot Library</h3>

  <p align="center">
    ¡A Simpler Solution to Complex Chatbots Backends!
    <br />
    <a href="https://github.com/Mizar-Contasti/zaroc"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="mailto:contasti.mizar@gmail.com">Colaborate</a>
    ·
    <a href="https://github.com/Mizar-Contasti/zaroc/issues">Report Bug</a>
    ·
    <a href="https://github.com/Mizar-Contasti/zaroc/issues">Request Feature</a>

  </p>
</p>

<h4 align="center">Welcome to Zaroc, the library that allows you to fastly build chatbots in Dialogflow with PHP</h4>
<br />

## Summary

**-------------------------------------------------------------------------**

- **🚀[Getting Started](#getting-started)** - Check it!

- **🚩[Understanding the Dialogflow Language](#understanding-the-dialogflow-language)** - Dialogflow has a Secret Language

- **🤖[How Zaroc Works](#how-zaroc-works)** - Can you understand what Zaroc Does?

- **🧱[Blocks](#blocks)** - Your Bricks to Build, Don't change its Structure

- **🗼[Templates](#templates)** - Your Constructions to Put, Use the template Examples or Create your Own

- **🍎[Variables](#variables)** - Breaking NO-CODE

- **🌳[Built-In Functions](#built-in-functions)** - Speed for Bot Developers

- **💾[Database Connection](#database-connection)** - Sometimes you need to

- **🎈[API Examples](#api-examples)** - New Era connections

- **📚[Changelog](#changelog)** - Look at the uncomming changes

- **🎉[Colaborations](#colaborations)** - Are you Ready?

**-------------------------------------------------------------------------**

## **🚀Getting Started**

> ### Get Started with **[this Video]()** or **Read the Instructions below**

> - Download the Core Folder **[Here](https://drive.google.com/drive/folders/1IGo488G_OIMosRhja4psrOHwwrJ-nsCa?usp=sharing)**
> - Download the Bot Template **[Here](https://drive.google.com/drive/folders/1SesO4t1u0W7pEdirmBTE7NGg2e3hTGJi?usp=sharing)**
> - Put it on the same folder E.i. "Chatbots"

![Put it on the same folder](https://codexceleste.com/github/zaroc/md_1.jpg)

> - Check that your bot is requiring the Library Correctly

![Check that your bot is requiring the Library Correctly](https://codexceleste.com/github/zaroc/md_2.jpg)

> - Go into Bot Variables and Change its Password and Name, check then that these variables are inside the AUTH function on the Bots Core File

![Go into Bot Variables and Change its Password and Name](https://codexceleste.com/github/zaroc/md_3.jpg)

> - Go to Dialogflow's fullfillment and connect the Bot VIA Webhook. Putting your path to the Bot's Core File. Remember to put chatbotName and chatbotPassword in the Basic Auth

![Go to Dialogflow's fullfillment and connect the Bot VIA Webhook. Putting your path to the Bot's Core File. Remember to put chatbotName and chatbotPassword in the Basic Auth](https://codexceleste.com/github/zaroc/md_4.jpg)

> - Create Test Intent in Dialogflow and use the test Intention Example that the bot has

![Go into Bot Variables and Change its Password and Name](https://codexceleste.com/github/zaroc/md_5.jpg)

> - Test It

![Go into Bot Variables and Change its Password and Name](https://codexceleste.com/github/zaroc/md_6.jpg)

### Now you are done!

> #### For Integrations, basic and Advanced topics, check the **[Summary](#summary)**

**-------------------------------------------------------------------------**

## **🚩Understanding the Dialogflow Language**

> - Dialogflow Comunicates Throught JSON, It sends a JSON to your server and you can do whatever you what.
> - But **you must have to keep an structure** Structure predefined by Zaroc (If you put a semicolon, a comma or something more where should not be, your backend wont work)
> - There are many ways to translate what it is saying and talking its own language
> - Zaroc Comunicates with Dialogflow Throught WebService (It's like an API)
> - Zaroc It's Builded in Blocks and Templates that lets you build creatively what you would like to see in Dialogflow's Response
> - Also Offers You Examples to do Database, API Stuff, and some another amazing functions that will let you build faster
> - There are lot of ways to achieve what you are looking for, but Zaroc its a simpler solution to Dialogflow's Complex Backends and Activities

## **🤖How Zaroc Works**

> - Zaroc Takes a Dialogflow's JSON response, and parse It (E.I Get an Intent)
> - Zaroc Responses with it's built templates to Dialogflow (E.I the response that the user who trigered the intent will get)
> - Dialogflow Parse the response and shows the result

## **🧱Blocks**

> - **Why Blocks?** Blocks are designed as a Security and Easy Way to build. **Remember** that we have to keep **an Specific Structure**, **Don't change it** or **you will get a headache**
> - Blocks are just a litle part of the Zaroc Arquitecture
> - **What should be a block?** A block should be a specific, litle and reusable structure, For Example: A Facebook Button, A WhatsApp Paragraph, A Web Image. So never touch it's structure
> - Blocks can be put it together to build Templates

## **🗼Templates**

> - **Why Templates** Templates are ways to make a reusable structures. For example, Text and Image, Image and Cards.
> - As a second explanations, Templates are groups of blocks built in harmony
> - **So, I can do my own Templates?** Yes, but remember to maintain the structure. You will find a section below where you will see how yo Create It

## **🍎Variables**

> - **Why Variables?** We are using PHP, we are at Backend, Why not use it if makes our lives easier?
> - There are prebuilt variables that will help you with your Chatbot Development (I.E Colors)

## **🌳Built-In Functions**

> - **Why Functions?** Same as Variables, Help you at doing all things easily (Cathing Variables, Getting Information, Getting Dates, Formating Whatever you want)

## **💾Database Connection**

## **🎈API Examples**

## **📚Changelog**

### Incomming Changes

> - getSessionID (Retrieves Session ID from the conversation)
> - SM Constructor and Templates Improved to work with more than 1 type of SM (Allow you to build for Telegram, facebook and other SM in the same Structure)
> - Universal Constructor (**DM**, **SM**, **WS**)

### 0.4

> - **WS** WhatsApp blocks and Templates Added
> - getPhoneNumber Function implemented **WS Only** (Retrieves userPhone Number)
> - Zaroc now has a Modular Arquitecture (Makes easy to read and understand)
> - First Look of Documentation Implemented

### 0.3

> - Universal Constructor and Template Implemented (**DM** and **SM**)
> - Revamped Arquitecture (Build now by Multidimensional Arrays)
> - API examples Added (For Request use GuzzleHTTP Library)
> - More basic Variables added (Colors, Imgs, etc)

### 0.2

> - **SM** Facebook Messenger and Telegram, Blocks and Templates Added.
> - Revamped Architecture (Built now by Arrays)
> - Multiblocks with less code
> - Database Examples Added

### 0.1

> - Webservice Functions Added
> - **DM** Dialogflow Messenger Blocks Added
> - Constructor and Templates Added
> - Arquitecture built by Strings

## **🎉Colaborations**

### 🙌How to Colaborate

> - Tell me your Ideas, and how do you can colaborate
> - Mail me [Here]()

### 😁People Who colaborate on Zaroc

> - [Agustin Ramirez](https://github.com/mxagustinl)
