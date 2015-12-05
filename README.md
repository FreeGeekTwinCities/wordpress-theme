# FoundationPress

This is a WordPress starter theme based on Foundation 5 by Zurb. The purpose of FoundationPress, is to act as a small and handy toolbox that contains the essentials needed to build any design. FoundationPress is meant to be a starting point, not the final product. If you're looking for an all-in-one theme with built-in shortcodes, plugins, fancypancy portfolio templates or whatnot, I'm afraid you have to look elsewhere.

Please fork, copy, modify, delete, share or do whatever you like with this. 

All contributions are welcome!

## Requirements

**A brief explanation to the requirements** (feel free to skip this if you're a pro):

Back in the days we wrote all styles in the style.css file. Then we realized that this could quickly create clutter and confusion, especially in larger projects. Foundation uses SASS (equivalent to LESS, used in Bootstrap). In short, SASS is a CSS pre-processor that allows you to write styles more effectively and tidy. 

To compile SASS files into one style sheet, we use a tool called Grunt. In short, Grunt is a task runner that automates repetitive tasks like minification, compilation, linting, etc. Grunt and Grunt plugins are installed and managed via npm, the Node.js package manager. Before setting up Grunt ensure that your npm is up-to-date by running ```npm update -g npm``` (this might require ```sudo``` on certain systems)

Bower is a package manager used by Zurb to distribute Foundation. When you have Bower installed, you will be able to run ```foundation update``` in the terminal to update Foundation to the latest version. (After an upgrade you must run ```grunt build``` to recompile files).


**Okay, so you'll need to have the following items installed before continuing.**

  * [Node.js](http://nodejs.org): Use the installer provided on the NodeJS website.
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`

## Quickstart

```bash
cd my-wordpress-folder/wp-content/themes/
git clone git@github.com:olefredrik/FoundationPress.git
mv FoundationPress your-theme-name
cd your-theme-name
npm install && bower install && grunt build
```

Tip: If you get an error saying Permission denied (publickey) when cloning the repository, use the https protocol instead:
```git clone https://github.com/olefredrik/FoundationPress.git```

While you're working on your project, run:

`grunt watch`

And you're set!

Check for Foundation Updates? Run:
`foundation update` 
(this requires the foundation gem to be installed in order to work. Please see the [docs](http://foundation.zurb.com/docs/sass.html) for details.)

### Stylesheet Folder Structure

  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `scss/foundation.scss`: Imports for Foundation components and your custom styles.
  * `scss/config/_settings.scss`: Original Foundation 5 base settings
  * `scss/assets/_icons.scss`: Foundation Icons
  * `scss/site/_base.scss`: Basic styles for FoundationPress. These can be replaced by your needs.

  * `css/foundation.css`: All Sass files are minified and compiled to this file
  * `css/foundation.css.map`: CSS source maps

### Script Folder Strucutre
  
  * `bower_components/`: This is the source folder where all Foundation components are located. `foundation update` will check and update scripts in this folder.

  * `js/custom`: This is where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated to [foundation.js](https://github.com/olefredrik/FoundationPress/blob/master/js/foundation.js)

  * `js/vendor`: Vendor scripts are copied from `bower_components/` to this directory. We use this path for enqueing the vendor scripts in WordPress.

  * Please note that you must run `grunt build` in your terminal for the script to be copied and concatinated. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details

## Demo

* [Clean FoundationPress install](http://foundationpress.olefredrik.com/)
* [FoundationPress Kitchen Sink - see every single element in action](http://foundationpress.olefredrik.com/kitchen-sink/)
* [FoundationPSD - Photoshop template for Foundation](http://foundationpress.olefredrik.com/downloads/foundation-psd-template/)

## How to make Foundation your own
* [Learn to use the _settings file to change almost every aspect of a Foundation site](http://zurb.com/university/lessons/66)
* [Other lessons from Zurb University](http://zurb.com/university/past-lessons)

## Examples of sites built using FoundationPress

* [Harvard Center for Green Buildings and Cities](http://www.harvardcgbc.org/)
* [Parent-Child Home Program](http://www.parent-child.org/)
* [Arch Design](http://archdesign.grafique.cz/)
* [Hip and Healthy](http://hipandhealthy.com)
* [Thinx Underwear](http://www.shethinx.com/)
* [Threadbird blog](http://blog.threadbird.com/)
* [Code Cub](http://www.thecodecub.com/)
* [Public House Wines](http://publichousewines.hstestsite.info/)
* [Bristol Doors Open Day 2014](http://www.bristoldoorsopenday.org/)
* [Franchise Career Advisors](http://franchisecareeradvisors.com)
* [Le saint](http://www.lesaint.ca)
* [Help blog](http://help.com/blog/)
* [Maren Schmidt](http://marenschmidt.com)
* [Ciancimino Gallery](http://ciancimino.com)

## Contributing
#### Here are ways to get involved:

1. [Star](https://github.com/olefredrik/FoundationPress/stargazers) the project!
2. Answer questions that come through [GitHub issues](https://github.com/olefredrik/FoundationPress/issues)
3. Report a bug that you find
4. Share a theme you've built on top of FoundationPress
5. [Tweet](https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffoundationpress.olefredrik.com%2F&text=Check%20out%20FoundationPress%2C%20the%20ultimate%20%23WordPress%20starter-theme%20built%20on%20%23Foundation%205&tw_p=tweetbutton&url=http%3A%2F%2Ffoundationpress.olefredrik.com&via=olefredrik) and [blog](http://www.justinfriebel.com/my-first-experience-with-foundationpress-a-wordpress-starter-theme-106/) about the advantages (and criticisms) of FoundationPress

#### Pull Requests

Pull requests are highly appreciated. About a dozen people have written parts of FoundationPress (so far). Here are some guidelines to help:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)

## Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)

## Tutorials

* [Build a responsive WordPress theme](http://www.webdesignermag.co.uk/tutorials/build-a-responsive-wordpress-theme/)
* [Setting Up a Blog with Foundation and WordPress](http://www.thecodecub.com/htmlcss/setting-up-a-blog-with-foundation-and-wordpress/)

