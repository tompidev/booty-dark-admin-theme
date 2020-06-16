# Booty Dark Admin (Theme)
### What is Booty Dark Admin theme?

Booty Dark Admin is an Admin Theme for Bludit Flat-file CMS.

Booty Dark Admin allows you to change individual elements of the admin sidebar and the Right Main pane.

There is also an add-on plugin to help you to change individual elements of your new admin theme. This plugin is not necessary but recommended. [See comparison below](https://github.com/JTWebTools/booty-dark-admin-theme#comparison-of-features).

No other add-ons are required to use the template.

------

### What is changed?

It can be said that the image of the whole admin page has changed. For example:

* fixed and colored sidebar 
* the appearance of the sidebar menu items
* some menu item putting into icons
* badges for number of created articles, users and categories
* panel styled main area on the right
* footer that includes the Bludit version and the active admin theme
* and much more...

------

### Options available 

These option are only available through [this add-on plugin](https://github.com/JTWebTools/booty-dark-admin-plugin)!

* **Sidebar color** 

  You can set two colors for sidebar: Light or Dark

* **Badges**
  
  Hide or show Badges on the sidebar and on the top navigation of the content page. The badges will show you how many articles have been created on the site so far.
  
* **Footer info**
  
  Displays the system name and version and the template name in the footer of all admin pages
  
* **Control icons**

  Some original sidebar items have been removed and can be navigated using icons instead.

------

### Comparison of features

Here you can see the different what you get if you install the add-on plugin

|                   | without plugin  |             with plugin             |
| :---------------- | :-------------: | :---------------------------------: |
| **Sidebar color** |      Dark       |            Dark or Light            |
| **Badges**        | Only on sidebar | Sidebar, Content page, both or hide |
| **Footer info**   |    Displayed    |           Display or hide           |
| **Contol icons**  |     Bottom      |            Top or Bottom            |

------

### Installing and changing admin theme to Booty Dark Admin

- **Installing the theme and its add-on plugin in a few steps**
  - **Important! First make a backup of your website!**
  
  - download the theme package
  
  - unzip it to a folder on your local PC
  
  - upload the ***booty-dark-admin*** folder into the ***bl-kernel / admin / themes***  directory
  
- **You have to change the admin theme now**
  - after successfully install go to ***bl-content / databases*** folder and open ***site.php*** file with a text editor (such as notepad). 
  - Search in the file the ***adminTheme*** string for and change its value to ***booty-dark-admin***
- **Just one more thing!**
  - You do not need to use the add-on plugin but recommended. To use the plugin you have to separately install and activate it. [Learn more about it...](https://github.com/JTWebTools/bludit-plugins/tree/master/booty-dark-admin)

That's all. You have successfully installed the new administrator theme! Enjoy it! :)

------

### Demo

[Click here...](https://github.com/JTWebTools/booty-dark-admin-theme/tree/master/images)

------

### Frequently Asked Questions

**Q:**	I have the package installed successfully but i can't see the new theme. Why?

​	**A:**	You have to change the admin theme in your sites database. Plaese read the "[Installing and changing admin theme to Booty Dark Admin](https://github.com/JTWebTools/booty-dark-admin-theme#installing-and-changing-admin-theme-to-booty-dark-admin)" section again.

**Q:**	How can i disable this theme?

​	**A:**	To disable the theme you have to change back to the native admin theme in your websites database.

**Q:**	How can i uninstall the Booty Dark Admin theme? 

​	**A:**	Before uninstall the admin theme recommended to changing back to the native Bludit admin theme in the website database file. After this done go to bl-kernel/admin/themes and delete the whole booty-dark-admin directory. Thats all... 

------

### Is further development expected?

Yes! I still have a lot of ideas waiting to be implemented. 
To access future updates, visit [my GitHub releases page](https://github.com/JTWebTools/booty-dark-admin-theme/releases) or the [Bludit Themes page](https://themes.bludit.com/). 
Check the current release of Booty Dark Admin on the Plugins page or on plugin settings page.