### Who
Yang Yang.
Tanner Lillich.
Allison Rodenbaugh.
Ben Miller


### Title

Akademia


### Vision

Veni, Vidi, Didici.

To protect students from agitation,

To provide students with information,

To denounce the boredoms of class and lectures,

To extend knowledge to the world with facts.


### Automated Tests

Used Selenium for Automated Web Testing:

http://www.seleniumhq.org/

Tests are ran through Selenium with the following:


User inputs username and clicks login (changing variable: abc) 

User then clicks on on Topics-> Mathmatics 

User clicks on Fractions

User is taken to Fractions Topic page

User inputs a number and presses submit(changing variable: 3) 

For our initial demonstration to Selenium( so that it records our actions), we used test cases (abc, 4) which created table abc and submitted 4, which showed us it is the wrong answer with the "you died" image. With our actions recorded, we rerun our actions through Selenium with changing variables with (Yang, 2), (Allison, 23), (Ben, 4), and (Tanner, 2).

#### Initial Case(Intended Result) 
![alt tag](https://i.imgur.com/o6XUGlJ.jpg)




### User Acceptance Tests

3 features will be tested by UATs.

### UAT 1: Verify login with valid user name 
**Description**
Test Login

**Pre-conditions**

User is on website

**Test Steps**

Click on upper right box

Input username on where it says "input username here"

Click Login Button

**Expected Result**

User creates a login with a table listed as the username in MySQL

**Actual Result**

Page refreshes after User logins with a table created in MySQL. Intended result

**Status(Pass/Fail)**

Pass

### UAT 2: Verify Mathmatics page
**Description**
Testing our Mathmatics page

**Pre-conditions**

User is on website

**Test Steps**

Click on Topics, Select Mathmatics

Select Topic Interested In ( Fractions/Addition/Calc etc) 

**Expected Result**

Shows a mathmatics page with the topic selected

**Actual Result**

correct Mathmatics Page is shown

**Status(Pass/Fail)**

Pass

### UAT 3: Verify Literature Page page
**Description**
Testing our Literature page

**Pre-conditions**

User is on website

**Test Steps**

Click on Topics, Select Literature

Select Topic Interested In ( Which article to read/discuss ) 

**Expected Result**

Shows the Literature page with the topic selected

**Actual Result**

correct Literature Page is shown

**Status(Pass/Fail)**

Pass








	
