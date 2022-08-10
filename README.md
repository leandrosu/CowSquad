
![CowSquad](https://cowsquad.xyz/codeInstitute/logoProject.png)

# ➡ Objective

**🐮 Cow Squad** is an NFT Project aimed at supporting different organisations and ready to make a difference!

# ➡ Structure

The cow squad website has only one page. A responsive menu where you will find the sections of the site, **Home**, **Cow Squad** and **Work with us**. The form response (*work with us*) was coded in *PHP* just to return a custom message, it is hosted on my own server.

![responsiveDesign](https://cowsquad.xyz/codeInstitute/responsive_design.jpg)


# ➡ Features
**Home**
![home](https://cowsquad.xyz/codeInstitute/01home.png)

> A short announcement;



**Cow Squad**
![cowSquad](https://cowsquad.xyz/codeInstitute/02cowSquad.jpg)

> Project description with some arts samples;



**Work with us**
![workWithUs](https://cowsquad.xyz/codeInstitute/03workWithUs.png)

> Work with us form.



# ➡ Technologies Used

- [HTML](https://en.wikipedia.org/wiki/HTML5) - HTML5 
- [CSS](https://en.wikipedia.org/wiki/CSS3) - CSS
- [SKETCHBOOK](https://www.sketchbook.com) - to draw the cow arts
- [ADOBE PHOTOSHOP](https://www.adobe.com/ie/products/photoshop.html) - to risize the images
- [ADOBE XD](https://www.adobe.com/products/xd.html) - wireframes for the website.
- [UI.DEV](https://ui.dev/amiresponsive) - to generate website mockup.
- [GITHUB](https://github.com) - to host and deploy the website..
- [GOOGLE FONTS](https://fonts.google.com) - to import  'Bangers' and 'Oswald' fonts.
- [FONTAWESOME](http://fontawesome.com) - icon library


# ➡ Validations
[Html Validation](https://validator.w3.org/)
![home](https://cowsquad.xyz/codeInstitute/htmlValidation.png)

[CSS Validation](https://jigsaw.w3.org/css-validator/)
![home](https://cowsquad.xyz/codeInstitute/cssValidation.png)




# ➡ Mockups
**Home**
![home](https://cowsquad.xyz/codeInstitute/home.jpg)

**Cow Squad**
![cowSquad](https://cowsquad.xyz/codeInstitute/cowSquad.jpg)

**Work with us**
![workWithUs](https://cowsquad.xyz/codeInstitute/workWithUs.jpg)

# ➡ Extra
I created a simple *PHP* script that receives the form information.

Code responsible for receiving, checking and print the f_name variable:
*- If the variable is null, I redirect the user to Work-with-us form, otherwise I just print the f_name + thank you message.
*
   

    <?php
    		$f_name  = $_POST['f_name'];
    		$link    = "https://leandrosu.github.io/CowSquad/";
        
    			if(isset($f_name)){
    				$f_name =  $f_name;
    			}else{
    				header('Location: '.$link.'#work-with-us');
    			}
    ?>


Printing message: 


    <h1>
    	<?php echo"$f_name"; ?>,<br>
      Thanks for your contact!
    </h1>
# ➡ Credits

I got some navbar refferences from [W3School](https://www.w3schools.com/css/).

# ➡ Content

All the information used in this project was taken from the official website [Cow Squad](https://cowsquad.xyz "Cow Squad"). 
The images used were all created by myself.

Icons used were taken from Font Awesome.

# ➡ Official Links
You can find more information about the official project on the links 👇

[WebSite](https://cowsquad.xyz) - Official website
[Twitter](https://twitter.com/cowsquad01) - Twitter Profile
[Instagram](https://www.instagram.com/cowsquad01/) - Instagram Profile
[Opensea](https://opensea.io/collection/cowsquad) - Opensea Collection (Coming soon)
[Discord](https://discord.com/invite/usvhkHvCwF) - Discord server
