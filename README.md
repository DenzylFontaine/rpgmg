# rpgmg
rpg music 

### Milestone 1 Feedback

&#10004; Correctly set up the git/GitHub/PhpStorm toolchain.

&#10008; Create the directory structure for the project as outlined.

&#10004; Define a purpose, audience, and goal for your project.

&#10004; Create one Persona for your proposed project.

&#10004; Create one Use Case for your proposed project, based on the Persona.

Good job on the purpose/audience/goal and Persona and Use Case for this project. You definitely have a clear idea of what kind of website you will be creating, and for whom (RPG and their fans). Your HTML looks great, however there are some problems with your directory structure. See below. Go ahead and get started on Milestone 2a. Be sure to correct the issues with the project noted below before Milestone 2a is due. Your Milestone 1 passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

#### Edits/Suggestions
There are a few issues with your Directory structure
- Add <code>/vendor</code> to line 3 of your .gitignore file
- Refer to the correct directory structure for PWP here in the [Milestone 1 documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/). Update this project to match before submitting Milestone 2a. 

### Milestone 2&alpha; Feedback
&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10004; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10008; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10008; Create a mobile and desktop/laptop wireframe for each page layout.

Your content strategy here is good, but your wireframes are missing and your sitemap exceeds the hard limit of 5 pages max.

For PWP, the scope is super minimal. This does not mean you can't grow this site down the line. PWP must be kept to a minimum in this class for the following reasons:
- Time
- Capstone Workload
- PWP is a learning project that focuses on simple, high quality execution of the fundamentals of Front End design &amp; development using Bootstrap. 

My suggestion for your sitemap is to have a max of 4 pages:

1. Home
2. Artists
3. Clothes
4. Music

This looks like it will need 2 layouts, so that will require 1 mobile and 1 desktop wireframe for each (4 wireframes total). 


As it stands, this is definitely a larger, more ambitious project for a PWP. If you can, I do suggest cutting more things out and narrowing the scope where you can. Think about cutting out another page, really. It's better to have a smaller project that is complete and well done, than a larger project that becomes a real struggle.

Because you are missing the wireframes and the site map is out of scope, I cannot pass this Milestone. Please refer to the [Milestone 2a Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/) and [evaluation  rubric](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

At the very minimum, I need to see an updated site map and wireframes before I can give you the green light to begin development. 

#### Suggestions &amp; Edits
- There are some errors in your HTML. Be careful with your list structure. All &lt;li&gt; tags must be inside a &lt;ul&gt;:
```
<ul>
  <li></li>
  <li></li>
</ul>
```
- Be sure that all tags are closed properly. Your &lt;img&gt; tag is still open, and is missing the alt text.
- &lt;meta charset="utf-8"/&gt; is missing 
- Add a "." before DS_Store in your .gitignore file

### Milestone 2&alpha; Feedback - Appended
&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10004; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10004; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10004; Create a mobile and desktop/laptop wireframe for each page layout.

Your Milestone passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development. 

I suggest that the elements on the mobile layout be full-width. This will ensure a good layout on the narrowest mobile screens.

Your HTML errors from my earlier evaluation still need to be corrected - but just take note of the errors and go forward from here. No need to spend any time making the corrections.

### Milestone 2b Feedback
Nice work. Take a look at the notes we went over below, and check in with me or Skyler this week. After some cleanup with your layout, you should be ready to deploy to ASO next week.

Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
- Fix directory structure. Create an index.php file inside /public_html - this will be your home page. Create a directory called /artists/index.php
- Download a placeholder image from pixabay for your carousel. Going forward, make sure the aspect ratio and size of all of the carousel images are the same. Ideally keep the images less than 500kb max 
- Use img-responsive bootstrap class on your product images. 
- Experiment adding an addition container inside columns for the products, and add the drop shadow and border styles to that. See snippet on Slack.
- look at google.com/fonts
- add a contact form
