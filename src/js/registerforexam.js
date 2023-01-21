var detailsStatus = false;
function showDetails(id) {
    //document.querySelector(`DetailsMenu`).classList.replace()
    document.getElementById(`Details${id}`).classList.toggle("showDetails");
    console.log(`Details${id}`)
    if(detailsStatus == false) {
        detailsStatus = true;
        document.getElementById(`DetialsButtonText${id}`).innerHTML = "<";
    } else if(detailsStatus == true) {
        detailsStatus = false;
        document.getElementById(`DetialsButtonText${id}`).innerHTML = ">";
    }
    
};