let heart = "";
for(let r= 1; r <=5 ;r++){
    for(let c= 1; c <= 17; c++){
        if(r == 1){
            if(c == 1 || c == 5){ 
                heart += "** ";      
            }else if(c == 7 || c == 11){
                heart += "** ";
            }else if(c == 13 || c == 16){
                heart += "** ";
            }else{
                heart +="   ";
            }
        }
        if(r == 2){
            if(c == 1 || c == 2 || c == 4 || c == 5){
                heart += "** ";
            }else if(c == 7 || c == 8 || c == 11){
                heart += "** ";
            }else if(c == 13 || c == 15){
                heart += "** ";
            }else{
                heart +="   ";
            }
        }

        if(r == 3){
            if(c == 1 || c == 3 || c == 5){
                heart += "** ";
            }else if(c == 7 || c == 9 || c == 11){
                heart += "** ";
            }else if( c == 13 || c == 14){
                heart += "** ";
            }else{
                heart += "   ";
            }
        }

        if(r == 4){
            if(c == 1 || c == 5){
                heart += "** ";
            }else if(c == 7 || c == 10 || c == 11){
                heart += "** ";
            }else if(c== 13 ||c == 15){
                heart += "** ";
            }else{
                heart += "   ";
            }
        }

        if(r == 5){
            if(c == 1 || c == 5){
                heart += "** ";
            }else if(c == 7 || c == 11){
                heart += "** ";
            }else if(c == 13 || c == 16){
                heart += "** ";
            }else{
                heart += "   ";
            }
        }
    }
    heart+= "\n";
}


console.log(heart);

