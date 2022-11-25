/* Function for when the user clicks on the button; 
   Should toggle between hiding and showing the dropdown content */
function displaySites() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i]
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/* START OF SITE-RELATED .csv HANDLING FUNCTIONS */

// Converts the string representation of site_database.csv to a nested associative array
function csvToArray(str, delimiter = ",") {
    // slice from start of text to the first \n index
    // use split to create an array from string by delimiter
    const headers = str.slice(0, str.indexOf("\n")).split(delimiter);

    // slice from \n index + 1 to the end of the text
    // use split to create an array of each csv value row
    const rows = str.slice(str.indexOf("\n") + 1).split("\n");

    // Map the rows
    // split values from each row into an array
    // use headers.reduce to create an object
    // object properties derived from headers:values
    // the object passed as an element of the array
    const arr = rows.map(function (row) {
        const values = row.split(delimiter);
        const el = headers.reduce(function (object, header, index) {
            object[header] = values[index];
            return object;
        }, {});
        return el;
    });

    return arr;
}

// Extracts the site names from the site_database array
function getSiteNames(full_arr) {
    var site_arr = [];

    // Iterates through 2-D associative array and adds only site names to site_arr
    for (var i = 0; i < full_arr.length - 1; i++) {
        site_arr.push(full_arr[i]['site_name']);
    }

    return site_arr;
}

// Uses HTML DOM to add elements to the site dropdown list
function addSitesToDropdown(site_names_arr) {
    for (var i = 0; i < site_names_arr.length; i++) {
        // Creates a new link element
        var a = document.createElement('a');
        // Sets the link text (name of each site)
        var linkText = document.createTextNode(site_names_arr[i]);
        // Associates link text with new link element
        a.appendChild(linkText);
        a.title = site_names_arr[i];
        // Actual link route [TO BE ADDED]
        a.href = "#";
        // Adds new link element (site name) to the existing dropdown menu
        document.getElementById("myDropdown").appendChild(a);
    }
}

// Extracts site names from site_database.csv and adds them as links to the dropdown menu
async function loadFileAndAddToDropdown(url) {
    try {
        // Loads site_database.csv as an object
        const response = await fetch(url);
        // Creates object containing a string representation of site_database.csv
        const data = await response.text();
        // Creates a 2-D associative array using the contents of site_database.csv
        var csv_array = csvToArray(data);
        // Creates a 1-D array of site names
        var site_array = getSiteNames(csv_array);
        // Adds site names as links to dropdown menu
        addSitesToDropdown(site_array);
    } catch (err) {
        console.error(err);
    }
}

/* END OF .csv SITE-RELATED HANDLING FUNCTIONS */
