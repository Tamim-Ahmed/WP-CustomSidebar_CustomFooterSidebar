# WP-CustomSidebar_CustomFooterSidebar
Here You can Know How to Add or Register Custom Sidebar or Custom Footer Sidebar ---------

<!------------------------------------ STEP 1 #HTML --------------------------------------->

The first step is to add the HTML markup. Let’s say we’re going to have three different sections in the widgetized footer with lists of Most Recent Posts, Monthly Archives, and Daily Archives. We’ll place this HTML code above the current “copyright” line.

- You will get codes on footer.html

N.B: Basically this code puts each “widget” in a div. Inside each widget is a heading and an unordered list with links. Yes, I know the links don’t go anywhere. We’ll later replace this with WordPress template tags. Here’s what we have so far:

<!------------------------------------- STEP 2 #CSS ------------------------------------------->
As you can see, this isn’t looking so good without any CSS styling. Add the following code to your stylesheet.

- You will Get Style on Style.css

N.B : What this code does is float each footer item to the left, which basically means they can be side by side. The width is set to 33%, which gives enough room for three footer items in a single row. There is also a little bit of padding added below each footer item. The second piece is just padding the lists 15 pixels to the left.

Now you can see the HTML and CSS are starting to come together.

<!-------------------------------- STEP 3 #Wordpress-Code --------------------------------------->

At the moment, we have a bunch of empty HTML links, with no actual WordPress code. Let’s replace the lists under Recent Posts, Monthly Archives, and Daily Archives with the WordPress template tag equivalents. Replace what you currently have from the wp.php file.

- You Will Get some Wordpress Code on wp.php

The parameters should be pretty self-explanatory, but if you’re not sure about any of them, try looking up wp_get_archives in the WordPress Template Tag Lookup Tool. Remember, I’m just using the wp_get_archives() template tags as a placeholder. We’ll be switching these out with other WordPress widgets later, after we widgetize the footer.

<!------------------------------------------- STEP 4 #Widgetize or #Register --------------------------->

The first step is to register the “sidebars.” To do this, simply paste or replace the current contents of the functions.php file from the register.php file

- You will get code from register.php

<!------------------------------------------- STEP 5 #Adding_Sidebar -------------------------------------->

Now we’ll go into sidebar.php and replace the current dynamic sidebar conditional tag from this: sidebar.php

<!----------------------------------------- STEP 6 #ADD_TO_FOOTER ------------------------------------------>

Now we’ll go into our footer.php file and wrap the footer items in it’s own respective sidebar conditional tag. add the following Code from Footer.php

