<?php
/**
 *  @package        :  Booty Dark Admin theme
 *  @author         :  Tompidev
 *  @website        :  https://github.com/tompidev
 *  @email          :  support@tompidev.com
 *  @license        :  MIT
 *
 *  @last-modified  :  2023-12-16 09:17:16 CET
 *  @release        :  1.1.6
 **/
?>

<script>
    function checkBDAThemeVersion() {

        console.log("[INFO] [BDA THEME VERSION] Getting list of versions of BootyDarkAdmin Theme.");

        $.ajax({
            url: "http://tompidev.com/downloads/release-info/json/bl-theme-bda.json",
            method: "GET",
            dataType: "json",
            success: function(json) {
                console.log("[INFO] [BDA THEME VERSION] New BootyDarkAdmin Theme version is available: v" + json.bdaTheme.newVersion);
                if (json.bdaTheme.newVersion > json.bdaTheme.currentVersion) {
                    $("#newBDAThemeAlert").removeClass("d-none");
                    $("#themePackageName").html(json.bdaTheme.package);
                    $("#themeCurrentVersion").html(json.bdaTheme.currentVersion);
                    $("#themeNewVersion").html(json.bdaTheme.newVersion);
                    $("#themeReleaseDate").html(json.bdaTheme.releaseDate);
                    var changelogObj, i, j, x = "";
                    changelogObj = [json.bdaTheme.changelog];
                    console.log(changelogObj);
                    for (i in json.bdaTheme.changelog) {
                        x += "<h5>" + json.bdaTheme.changelog[i].action + "</h5>";
                        for (j in json.bdaTheme.changelog[i].items) {
                            x += "<span class=\"fa fa-arrow-right ml-2\"></span>" + json.bdaTheme.changelog[i].items[j] + "<br>";
                        }
                    }
                    $("#releaseNotes").html(x);
                    $("#downloadBdaThemeLink").attr("href", json.bdaTheme.downloadLink);
                    $("#changelogBdaThemeLink").attr("href", json.bdaTheme.changelogLink);
                    $("#github").attr("href", json.bdaTheme.github);
                }
            },
            error: function(json) {
                console.log("[WARN] [BDA THEME VERSION] There is some issue to get the version status of BootyDarkAdmin Theme.");
            }
        });
    }
    checkBDAThemeVersion();
</script>
