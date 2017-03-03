12/02/16 Summary of project:

Please read this after viewing the front end web page and admin dashboard; otherwise, it will not make as much sense.

Inthenews is a WordPress front end application written in PHP, HTML, CSS, jQuery. The database is MySQL. It consists of a one-paged WordPress web site and a customized admin dashboard. I finished it on December 2, 2016. My client requested I build this so that it appends or embeds into his existing Laravel framework web site. This was a unique job.

To avoid my client's URL being "getbabyscripts.com/inthenews/inthenews," I made each news card a normal WordPress post as opposed to a custom post type. 

My client's version of this project consists of a news card template which resides in home.php, where their WP loop begins. Included in both versions' template hierarchy are header.php, footer.php, and single.php (or in the custom post type version, single-newscard.php), which allows editor users to preview a news card before publishing it.

For the admin dashboard I created custom fields where editor users can input values to create news cards without writing any code. The `meta_keys` and `meta_values` are saved to the SQL database within the postmeta table. I prefixed the database with "abc" so wp_abcpostmeta is the complete table name. 

In functions.php, I enqueued all assets including bootstrap.css, bootstrap.js, and inthenews.js (contains my jQuery that displays news cards based on which round button the user clicks/touches). I also wrote additional functions at the bottom of functions.php to hide or modify certain admin dashboard labels; for example, I replaced the label "Post" with "News Card" for a more intuitive user experience.

If you need to contact me about coding needs, please email lbrown@denotetoday.com. 
