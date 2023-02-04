<style>
    .bg-orange{
        background-color: orange;
    }

    .bg-dark-orange{
        background-color: darkorange;
    }

    #header{
        position:relative;
    }
    .rounded-footer-icons{
        padding: 10px;
        background-color: darkred;
        border-radius: 50%;
    }

    #search-input{
        width: 75%;
    }


    #header::before{
        content: '';
        top: 0;
        left: 0;
        position: absolute;
        background-image: url('header.jpg');
        background-size: cover;
        bottom:0;
        right: 0;
        background-position: center;
        opacity: 30%;
        z-index: -1;
    }
    #sub-header{
        position:relative;
    }

    #background{
        position: relative;
        height: 100vh;
        width: 100%;
    }
    .nunito{
        font-family: 'Nunito';
    }

    #background::before{
        content: '';
        top: 0;
        left: 0;
        position: absolute;
        background-image: url('header.jpg');
        background-size: cover;
        bottom:0;
        right: 0;
        background-position: center;
        opacity: 30%;
        z-index: -1;
    }
    #sub-header::before{
        content: '';
        top: 0;
        left: 0;
        position: absolute;
        background-image: url('header.jpg');
        background-size: cover;
        bottom:0;
        right: 0;
        background-position: center;
        opacity: 30%;
        z-index: -1;
    }
    .kanit{
        font-family: 'Kanit';
    }
    @media (min-width: 768px){
        .sub-header-text{
            font-size:50px;
        }
    }

    @media (min-width: 992px){
        .sub-header-text{
            font-size: 80px;
        }

        #search-input{
            width: 25%;
        }
    }
    .sub-header-text{
        text-shadow: 2px 2px orange;
    }

    .my-btn{
        background-color: orangered;
        color: white;
        border-width: 0;
        border-radius: 10px;
    }
    .my-btn-outline{
        background-color: white;
        border: 1px solid orangered;
        border-radius: 10px;
        transition-duration: 0.3s;
        color: orangered;
    }
    .my-btn-outline:hover{
        background-color: orangered;
        color: white
    }
    .my-btn:hover{
       background-color: darkorange;
    }
</style>
</style>