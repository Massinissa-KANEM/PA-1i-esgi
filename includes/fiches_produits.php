<div class="col-lg-3 col-md-12 mb-4">
    <div class="card h-100">
        <div class="card-body">
            <div class="imageproduit" >
            <a href="#" style="font-size:25px; position: absolute; right: 30px;"><ion-icon name="heart-outline" title="Favoris" ></ion-icon></a>
            <div style=" display: flex; justify-content: center; align-items: center;"><img src="images/Webp.net-resizeimage (1).jpg" alt=""></div>
            </div>
        </div>
        <ul class="list-group pt-2 px-2 list-group-flush description">
        <li class="list-group-item px-1 titre">
            <h4>Pâtes coquillettes</h4>
            <h5>le paquet de 1 kg</h5>
            <h6>1.35 € / KG</h6>
        </li>
        </ul>
        <ul class="list-group list-group-flush prix">
            <li class="list-group-item pt-2 pb-2">
                <h4>1,35 €</h4>
                <a href="#"><ion-icon name="cart-outline"></ion-icon></a>
            </li>
        </ul>
    </div>
</div>
<style>
.card {
    border: 1px solid rgba(0,0,0,.125);
    padding: 5px 5px;
    box-shadow: 0px;
}

.card::after {
    position: absolute;
    z-index: -1;
    opacity: 0;
    -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.card:hover {
    transform: scale(1.02, 1.02);
    -webkit-transform: scale(1.02, 1.02);
    backface-visibility: hidden; 
    will-change: transform;
    box-shadow: 0 1rem 3rem rgba(211, 211, 211, 0.75) !important;
}

.card:hover::after {
    opacity: 1;
}

.card:hover .btn-outline-primary{
    color:white;
    background:rgb(24, 119, 242);
}
.imageproduit  a ion-icon
{
    color: rgb(246, 139, 30);
}
.imageproduit  a ion-icon:hover
{
    color: rgb(255, 0, 0);
}
.titre
{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.titre h4
{
    font-size: 18px;
}
.titre h5, .titre h6
{
    font-size: 15px;
}
.titre h6
{
    font-size: 15px;
    color: #929292;
}
.prix li
{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.prix li h4
{
    font-size: 20px;
    margin: 0;
}
.prix li a
{
    display: flex;
    justify-content: center;
    text-align: center;
}
.prix li ion-icon
{
    font-size: 20px;
    padding: 4px 4px 4px 3px;
    color: #ffffff;
    border: 2px solid rgb(255, 195, 135);
    background-color: rgb(246, 139, 30);
    border-radius: 7px;
}
.prix li ion-icon:hover
{
    font-size: 20px;
    padding: 4px 4px 4px 3px;
    color: #464646;
    transition: 0.4s;
    background-color: rgb(246, 139, 30);
    border: 2px solid rgb(255, 195, 135);
    border-radius: 7px;
}
</style>