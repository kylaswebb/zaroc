# Zaroc - PHP Chatbot Library - A Simpler Solution to Complex Backends **(In Construction)**s

> ### Welcome to Zaroc, the library that allows you to fastly build chatbots in Dialogflow with PHP

## Summary

**-------------------------------------------------------------------------**

- [Getting Started](#getting-started) - Check it!

- [Understanding the Dialogflow Language](#understanding-the-dialogflow-language) - Dialogflow has a Secret Language

- [How Zaroc Works](#how-zaroc-works) - Can you understand what Zaroc Does?

- [Blocks](#blocks) - Your Bricks to Build, Don't change its Structure

- [Templates](#templates) - Your Constructions to Put, Use the template Examples or Create your Own

- [Variables](#variables) - Breaking NO-CODE

- [Built-In Functions](#built-in-functions) - Speed for Bot Developers

- [Database Connection](#database-connection) - Sometimes you need to

- [API Examples](#api-examples) - New Era connections

- [Changelog](#changelog) - Look at the uncomming changes

- [Colaborations](#colaborations) - Are you Ready?

**-------------------------------------------------------------------------**

## Getting Started

> ### Get Started with **[this Video]()** or **Read the Instructions below**

> - Download the Core Folder **[Here]()**
> - Download the Bot Template **[Here]()**
> - Put it on the same folder E.i. "Chatbots"
> - Check that your bot is requiring the Library Correctly
> - Connect your Dialogflow's BOT VIA Webhook to the Chatbot Principal File
> - FillUp your botName and Password. Check the AUTH function inside the Principal File, and add chatbotname and password to the Fullfillment header
> - Create Test Intent on your DF Console, active Fulfillment from Webhook
> - Test It and you are connected to the library successfully!
>
> #### For Integrations, basic and Advanced topics, check the **[Summary](#summary)**

**-------------------------------------------------------------------------**

## Understanding the Dialogflow Language

> - Dialogflow Comunicates Throught JSON, It sends a JSON to your server and you can do whatever you what.
> - But **you must have to keep an structure** Structure predefined by Zaroc (If you put a semicolon, a comma or something more where should not be, your backend wont work)
> - There are many ways to translate what it is saying and talking its own language
> - Zaroc Comunicates with Dialogflow Throught WebService (It's like an API)
> - Zaroc It's Builded in Blocks and Templates that lets you build creatively what you would like to see in Dialogflow's Response
> - Also Offers You Examples to do Database, API Stuff, and some another amazing functions that will let you build faster
> - There are lot of ways to achieve what you are looking for, but Zaroc its a simpler solution to Dialogflow's Complex Backends and Activities

## How Zaroc Works

> - Zaroc Takes a Dialogflow's JSON response, and parse It (E.I Get an Intent)
> - Zaroc Responses with it's built templates to Dialogflow (E.I the response that the user who trigered the intent will get)
> - Dialogflow Parse the response and shows the result

## Blocks

> - **Why Blocks?** Blocks are designed as a Security and Easy Way to build. **Remember** that we have to keep **an Specific Structure**, **Don't change it** or **you will get a headache**
> - Blocks are just a litle part of the Zaroc Arquitecture
> - **What should be a block?** A block should be a specific, litle and reusable structure, For Example: A Facebook Button, A WhatsApp Paragraph, A Web Image. So never touch it's structure
> - Blocks can be put it together to build Templates

## Templates

> - **Why Templates** Templates are ways to make a reusable structures. For example, Text and Image, Image and Cards.
> - As a second explanations, Templates are groups of blocks built in harmony
> - **So, I can do my own Templates?** Yes, but remember to maintain the structure. You will find a section below where you will see how yo Create It

## Variables

> - **Why Variables?** We are using PHP, we are at Backend, Why not use it if makes our lives easier?
> - There are prebuilt variables that will help you with your Chatbot Development (I.E Colors)

## Built-In Functions

> - **Why Functions?** Same as Variables, Help you at doing all things easily (Cathing Variables, Getting Information, Getting Dates, Formating Whatever you want)

## Database Connection

## Changelog

## API Examples

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

## Colaborations

### How to Colaborate

> - Tell me your Ideas, and how do you can colaborate
> - Mail me [Here]()

### People Who colaborate on Zaroc

> - [Agustin Ramirez]()
