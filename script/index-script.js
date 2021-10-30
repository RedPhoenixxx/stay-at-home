const covidAPI = "https://coronavirus-19-api.herokuapp.com/";
getWorldData();

async function getData(url, dataType){
    const response = await fetch(url + dataType, {
        method: 'GET',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        redirect: 'follow',
        referrerPolicy: 'no-referrer'
    });
    return response.json();
}

function getWorldData(){
    getData(covidAPI, "all")
    .then(data => {
        let n1 = data.cases;
        let n2 = data.deaths;
        let n3 = data.recovered;
        document.getElementById("world-stat").innerHTML = n1.toLocaleString('en-US');
        document.getElementById("death-stat").innerHTML = n2.toLocaleString('en-US');
        document.getElementById("recovered-stat").innerHTML = n3.toLocaleString('en-US');
        //console.log(data);
    });
}

function getCountryData(){
    const country = document.getElementById("country-input").value;
    getData(covidAPI, "countries/" + country)
    .then(data => {
    });
}