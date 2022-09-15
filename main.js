

function init() {
    const parcThabor = {
        lat: -3.1496523254397295,
        lng: 24.17242279326707,
    }
    //taille de zoom
    const zoomLevel = 5;
    //creation de la map
    const map = L.map('map').setView([parcThabor.lat, parcThabor.lng], zoomLevel);

    /*      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
               maxZoom: 5,
                minZoom: 5,
                attribution: '© OpenStreetMap'
            }).addTo(map);
    */
   //creation du calque
    var openStreetMap_DE = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
        maxZoom: 5,
        minZoom: 5,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    //creation des icons
    var soleil = L.icon({
        iconUrl: './images/PNG/soleil1.png',
        shadowUrl: './images/marker-shadow.png',
        iconSize: [40,40],
        shadowSize:[50,50],
        iconAnchor: [42,35],
        shadowAnchor: [39,45],
        popupAnchor: [0,0]

    });
    var pluie = L.icon({
        iconUrl: './images/PNG/pluie1.png',
        shadowUrl: './images/marker-shadow.png',
        iconSize: [40,40],
        shadowSize:[50,50],
        iconAnchor: [42,35],
        shadowAnchor: [39,45],
        popupAnchor: [0,0]

    });   
    var orage = L.icon({
        iconUrl: './images/PNG/orage1.png',
        shadowUrl: './images/marker-shadow.png',
        iconSize: [40,40],
        shadowSize:[50,50],
        iconAnchor: [42,35],
        shadowAnchor: [39,45],
        popupAnchor: [0,0]

    });
    var cielGris = L.icon({
        iconUrl: './images/PNG/cielgris1.png',
        shadowUrl: './images/marker-shadow.png',
        iconSize: [40,40],
        shadowSize:[50,50],
        iconAnchor: [42,35],
        shadowAnchor: [39,45],
        popupAnchor: [0,0]

    });
    var nuageux = L.icon({
        iconUrl: './images/PNG/nuageux1.png',
        shadowUrl: './images/marker-shadow.png',
        iconSize: [40,40],
        shadowSize:[50,50],
        iconAnchor: [42,35],
        shadowAnchor: [39,45],
        popupAnchor: [0,0]

    });
    //ajout de marker et leurs icons
    var kinshasa = L.marker([-4.601182592343627, 16.28230698852354], {icon: orage}).addTo(map);
    var bandundu = L.marker([-4.984365759943966, 18.810533788896517],{icon: soleil}).addTo(map);
    var hautUele = L.marker([3.158029, 29.410376],{icon: soleil}).addTo(map);
    var kongoCentral = L.marker([-5.741355, 14.886933],{icon: soleil}).addTo(map);
    var kwango = L.marker([-7.378996, 18.701263],{icon: soleil}).addTo(map);
    var kwilu = L.marker([-3.4828943094735356, 17.516566699193763],{icon: soleil}).addTo(map);
    var maindombe = L.marker([-3.162522, 19.506401],{icon: soleil}).addTo(map);
    var kasai = L.marker([-3.759058, 22.071509],{icon: soleil}).addTo(map);
    var equateur = L.marker([-0.148381, 19.808525],{icon: soleil}).addTo(map);
    var kasaiCentral = L.marker([-7.323279, 23.082251],{icon: soleil}).addTo(map);
    var kasaiOriental = L.marker([-6.308785, 23.939185],{icon: soleil}).addTo(map);
    var sankuru = L.marker([-2.936497, 24.521460],{icon: soleil}).addTo(map);
    var tshuapa = L.marker([-1.296342, 22.362846],{icon: soleil}).addTo(map);
    var mongala = L.marker([1.500522, 21.796851],{icon: soleil}).addTo(map);
    var sudUbangi = L.marker([2.477704, 20.148901],{icon: soleil}).addTo(map);
    var nordUbangi = L.marker([3.201907, 22.225317],{icon: soleil}).addTo(map);
    var basUele = L.marker([3.223845, 26.158423],{icon: soleil}).addTo(map);
    var tshopo = L.marker([-0.029880, 25.984536],{icon: soleil}).addTo(map);
    var maniema = L.marker([-4.153622, 26.938452],{icon: soleil}).addTo(map);
    var lomami = L.marker([-6.155886, 25.971655],{icon: soleil}).addTo(map);
    var hautLomami = L.marker([-8.615554, 26.396717],{icon: soleil}).addTo(map);
    var lualaba = L.marker([-10.610468, 24.103492],{icon: soleil}).addTo(map);
    var hautKatanga = L.marker([-11.617903, 28.307737],{icon: soleil}).addTo(map);
    var tanganyka = L.marker([-5.774244677491197, 29.177237467736163],{icon: soleil}).addTo(map);
    var sudKivu = L.marker([-3.935566, 28.877739],{icon: soleil}).addTo(map);
    var nordKivu = L.marker([-1.573144091486702, 29.250535502258046],{icon: soleil}).addTo(map);
    var ituri = L.marker([1.071038, 30.014824],{icon: soleil}).addTo(map);
}
