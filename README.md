
# MarketWatch a Stock Tracking System

This project involves implementing a website that can be used to track Stock information for various companies.

## Overview
This project involves implementing a website that has both static and dynamic functionality & provide visitors with the ability to search for information
about publicly traded companies.

### Technologies Used:

* Front End: HTML/CSS
* Back End: PHP
* MySQL database

## Web Pages Description:

* index.html: The landing Page of the website 
* stocks.html: The page which enables user to enter stock symbol to be searched for and retrieves the data from database
* signup.html: The page allows the user to signup for the website.
* about.html: Provides the company infromation 	

# Process:

***

[![JavaScript Style Guide](https://img.shields.io/badge/code_style-standard-brightgreen.svg)](https://standardjs.com)

A visitor will search for (publicly traded) company information by entering a company’s stock ticker symbol and selecting specific types of information he/she would like to receive. The types of information to be provided include:

* Stock Price Information: recent stock price, high price and low price in last 365 days
* Company Summary Information: a short paragraph about what the company does,where it is located, and annual revenues
* Detailed Company Information: More detailed company information (e.g., when it was founded, number of employees, number of office locations, etc.), plus listing of top three officers with brief biographical information and images of these officers

A visitor can select different combinations of the above information. For example, one visitor may select stock price information only, another visitor may select company summary information only, another visitor may select stock price information and company summary information, another visitor may select stock price information and detailed company information.

# Project Layout:
The folder HTML_SCRIPTS contains all the HTML and CSS files dependent on the project.

The folder PHP_SCRIPTS contains all the PHP scripts for the project. 


The folder named Stock contains all the DB elements. 
There are mainly two main tables being used for this project 'companies' which contains all company related details such as Recent stock prices, summary of the company etc.

The table 'officers' contains the three leaders of each organization listed in the companies folder. 
Currenlty there are three companies that can be accessed using the DB and they are:
1) Google - GOOGL
2) Bank of America - BAC
3) Microsoft - MSFT


# Summary:

The project aims to help a user search and view comapny details about public traded companies. Currently the webiste is able to perform the tasks only to 3 companies however it can easily be scaled up adding more information to the database and hence has a dynamic design
