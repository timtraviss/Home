# Code Samples
## Adobe Acrobat Code
The following is helpful little code snippets to assist with building PDF forms.

**Calculating an Age from a date of birth**
The script must go in the AGE field (calculation tab) and not the DOB field.

As previously mentioned, be sure to set the date format correctly on the DOB field.

```js
event.value = "";
dobValue = getField("DOB").value;
if (dobValue!="") {
dob = util.scand("dd.mm.yyyy", dobValue);
now = new Date();
age = now.getFullYear() - dob.getFullYear();
if (now.getMonth() < dob.getMonth())
age--;
else if (now.getMonth()==dob.getMonth() && now.getDate() < dob.getDate())
age--;
event.value = age;
}
```

**Source**

https://answers.acrobatusers.com/age-calculations-q66397.aspx
This code turns all text in field into upppercase.
Make everything all caps after committing; that would be in the Validate event:
```js
event.value = event.value.toString().toUpperCase() ;
```
      
**Source**

https://answers.acrobatusers.com/how-make-form-field-caps-q38840.aspx

## HTML & CSS Code Snippets
Basic
Open default mail program, create new message with the TO field already filled out.

```html
      <a href="mailto:someone@yoursite.com">Email Us</a>
```      

## Adding a subject
Open default mail program, create new message with the TO and SUBJECT field already filled out. Essentially we are adding the parameter subject to the href value.

Spaces in the subject will probably work OK, but to be super-extra sure, you can replace spaces with “%20”.

```html
      <a href="mailto:someone@yoursite.com?subject=Mail from Our Site">Email Us</a>
```      

## Adding CC and BCC
Open default mail program, create new message with the TO, SUBJECT, CC, and BCC field already filled out. Essentially we are adding the parameters cc and bcc to the href value.

Also note that you add multiple values to CC and BCC by comma separating them.

```html
      <a href="mailto:someone@yoursite.com?cc=someoneelse@theirsite.com, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News">Email Us</a>
```      

## Adding body text
Just add the body parameter into the ever-growing list of parameters we are using.

```html
        <a href="mailto:someone@yoursite.com?cc=someoneelse@theirsite.com, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News&body=Body-goes-here">Email Us</a>
```           

### Source
https://css-tricks.com/snippets/html/mailto-links/

This works on the desktop and on mobility - the trick is no spaces between the words and use **%20** symbale instead of the space

```html
mailto:tmfmc@police.govt.nz?cc=SupResAuckland@police.govt.nz&subject=Supported%20Resolutions%20Participant%20referral%20and%20consent%20form
```
The following relates to buttons on PDF forms and what code works with a PDF on a desktop and a PDF on iOS

This works on the desktop but **NOT** on mobility

```js
var to = "tmfmc@police.govt.nz";  
var cc = "SupResAuckland@police.govt.nz";  
var bcc = "";  
var subject = "Supported Resolutions Participant referral and consent form";  
var body = "";  
var showUserInterface = true;  
this.mailDoc(showUserInterface,to,cc,bcc,subject,body);  
```
      
This works on the desktop but **NOT** on mobility

```js
this.mailDoc({
bUI: false,
cTo: "tmfmc@police.govt.nz",
cCC: "SupResAuckland@police.govt.nz",
cSubject: "Supported Resolutions Participant referral and consent form",
cMsg: "Supported Resolutions Participant Form and Summary of Facts."
});
```
      
### Resources

#### Adobe Guides
https://www.adobe.com/content/dam/acom/en/devnet/acrobat/pdfs/js_api_reference.pdf#page=322 

http://www.nk-inc.com/software/fdftoolkit.net/email-pdf-mailto-generator.aspx

#### Mailto Links 
https://mailtolink.me/

https://css-tricks.com/all-about-mailto-links/

#### Markdown Guides
[Codecamp Markdown Guide](https://www.freecodecamp.org/news/how-to-format-code-in-markdown/)

[Github Markdown Guide](https://guides.github.com/features/mastering-markdown/)
