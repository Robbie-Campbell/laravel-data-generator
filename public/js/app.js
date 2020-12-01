const tableName = document.getElementById("tableName");
const tableNameButton = document.getElementById("enterTableName");
const enterTableArea = document.getElementById("enter-tables");
const creatingTables = document.getElementById("creating-table");
const creatingTablesArea = document.getElementById("set-columns");
const mainTable = document.getElementById("main-input-area")
let table;

// Removes the table naming area
tableNameButton.addEventListener("click", ()=>{
    if (tableName.value !== "")
    {
        table = tableName.value;
        enterTableArea.remove();
        creatingTables.textContent += table;
        creatingTables.style.display = "block";
        creatingTablesArea.style.display = "block";
    }
});

// Create javascript rows in the HTML DOM
function createColumnInputArea()
{
    let columnInfo = document.createElement("div");
    columnInfo.style.display = "flex";
    let columnName = document.createElement("input");
    columnName.placeholder = "Enter Column Name"
    let columnType = document.createElement("select");

    columnInfo.appendChild(columnName);
    columnInfo.appendChild(columnType);
    columnType.add(new Option("varchar"));
    columnType.add(new Option("integer"));
    columnType.add(new Option("boolean"));

    return columnInfo;
}

// Create list of options in select area
let select = document.getElementById("numberOfColumns");
let submitButton = document.createElement("BUTTON");
for (let i = 0; i < 15; i++)
{
    select.options[select.options.length] = new Option(i+1, i);
}
const enterNoOfColumns = document.getElementById("enterNoOfColumns");

// Create Input areas based on rows selected by user
let numberOfRows;
enterNoOfColumns.addEventListener("click", ()=>{
    numberOfRows = select.options[select.selectedIndex].text;
    creatingTablesArea.remove();
    for (let i = 0; i < numberOfRows; i++)
    {
        let row = createColumnInputArea();
        row.id = i;
        mainTable.appendChild(row);
    }
    submitButton.innerText = "Submit Column Names"
    mainTable.appendChild(submitButton);
});

// Store all of the input values in a map
let tableTypes = [];
let columnTitle = [];
submitButton.addEventListener("click", ()=>{
    for (let i = 0; i < numberOfRows; i++)
    {
        let select = document.getElementById(i).getElementsByTagName("select")[0];
        tableTypes.push(select.options[select.selectedIndex].text);
        columnTitle.push(document.getElementById(i).getElementsByTagName("input")[0].value);
    }
    console.log(tableTypes);
    console.log(columnTitle);
});
