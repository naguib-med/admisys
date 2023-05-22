const address = '52 Avenue Paul Alduy, Perpignan, France';

fetch('https://nominatim.openstreetmap.org/search?q=' + encodeURIComponent(address) + '&format=jsonv2')
    .then(response => response.json())
    .then(data => {
        const lat = data[0].lat;
        const lon = data[0].lon;

        const mymap = L.map('mapid').setView([lat, lon], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(mymap);

        L.marker([lat, lon]).addTo(mymap);
    })
    .catch(error => {
        console.log(error);
    });