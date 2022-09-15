

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
    var OpenStreetMap_DE = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
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
        iconUrl: './images/PNG/soleil1.png',
        shadowUrl: './images/marker-shadow.png',
        iconSize: [40,40],
        shadowSize:[50,50],
        iconAnchor: [42,35],
        shadowAnchor: [39,45],
        popupAnchor: [0,0]

    });
    //ajout de marker et leurs icons
    var kinshasa = L.marker([-4.601182592343627, 16.28230698852354], {icon: soleil}).addTo(map);
    var bandundu = L.marker([-4.984365759943966, 18.810533788896517],{icon: soleil}).addTo(map);
    var hautUele = L.marker([2.7718690446179832, 27.606883031302402],{icon: soleil}).addTo(map);
    var kongoCentral = L.marker([-5.7500311839417755, 13.405260245425373],{icon: soleil}).addTo(map);
    var kwango = L.marker([-4.737319563447851, 17.070298951871543],{icon: soleil}).addTo(map);
    var kwilu = L.marker([-3.4828943094735356, 17.516566699193763],{icon: soleil}).addTo(map);
    var maindombe = L.marker([-1.8484011934743243, 18.402275167060047],{icon: soleil}).addTo(map);
    var kasai = L.marker([-6.206512114123258, 20.644671398346368],{icon: soleil}).addTo(map);
    var equateur = L.marker([0.14926778668097057, 18.326370667732466],{icon: soleil}).addTo(map);
    var kasaiCentral = L.marker([-5.822366510153464, 22.40552268116007],{icon: soleil}).addTo(map);
    var kasaiOriental = L.marker([-6.078946308923239, 23.518018701379095],{icon: soleil}).addTo(map);
    var sankuru = L.marker([-4.865167204941676, 23.269341619545145],{icon: soleil}).addTo(map);
    var tshuapa = L.marker([-0.2795918885281463, 20.90815358405296],{icon: soleil}).addTo(map);
    var mongala = L.marker([2.2773345116915844, 21.493419597641097],{icon: soleil}).addTo(map);
    var sudUbangi = L.marker([3.3921629649763005, 19.82431742095133],{icon: soleil}).addTo(map);
    var nordUbangi = L.marker([4.266476656387734, 20.78405117238896],{icon: soleil}).addTo(map);
    var basUele = L.marker([2.8817680713939544, 24.716873057386888],{icon: soleil}).addTo(map);
    var tshopo = L.marker([0.6974371459313677, 25.291563142147215],{icon: soleil}).addTo(map);
    var maniema = L.marker([-2.834586138395978, 25.578805727041125],{icon: soleil}).addTo(map);
    var lomami = L.marker([-6.136395405964493, 24.567034443853597],{icon: soleil}).addTo(map);
    var hautLomami = L.marker([-8.642083677618997, 25.043169617695497],{icon: soleil}).addTo(map);
    var lualaba = L.marker([-10.647605275898293, 25.519513597470844],{icon: soleil}).addTo(map);
    var hautKatanga = L.marker([-11.56296740556966, 27.43481315043372],{icon: soleil}).addTo(map);
    var tanganyka = L.marker([-5.774244677491197, 29.177237467736163],{icon: soleil}).addTo(map);
    var sudKivu = L.marker([-2.511228746728152, 28.847543383892017],{icon: soleil}).addTo(map);
    var nordKivu = L.marker([-1.573144091486702, 29.250535502258046],{icon: soleil}).addTo(map);
    var ituri = L.marker([1.672647202368714, 30.22491014106745],{icon: soleil}).addTo(map);
}
