function initMap()
{
    const loc = {lat:47.917291,lng:106.920971};
    const map =new google.maps.Map(document.querySelector(".map"),{zoom:14,center:loc});
    const marker = new google.maps.Marker({position:loc,
                                            map:map});
}
// 47.917291,106.920971