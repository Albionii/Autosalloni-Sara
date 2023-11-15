options.style.opacity = "0";
            function filter(){
                const options = document.getElementById("options");
                const main = document.getElementById("mainDiv");
                const sideBar = document.getElementById("sideBar");
                if(options.style.opacity === "0"){
                    options.style.opacity = "1";
                    main.style.marginLeft = "10%";
                    options.classList.add("slideIn");

                }else{
                options.style.opacity = "0";
                main.style.marginLeft = "0%";
                options.classList.remove("slideIn");
                
                
            }
                
            }