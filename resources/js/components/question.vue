<template>
  <div>

    <nav>
        <img src="images/mugupp.png" alt="">

        <p> Question {{ no }} </p>
        <p id = timer><span>2</span> : <span>15</span></p>
    </nav>

    <div id = "m-quests">
        <p>
            {{ question }}
        </p>
    </div>


    <form action="">
        <div>
            <input type="radio" name="answer" id="answer-a">

            <span> ( a ). </span>
            <label for="answer-a">{{ a }}</label>
        </div>
        
        <div>
            <input type="radio" name="answer" id="answer-b">
              <span> ( b ). </span>
            <label for="answer-b">{{ b }}</label>
        </div>
        
        <div>
            <input type="radio" name="answer" id="answer-c">

              <span> ( c ). </span>
            <label for="answer-c">{{ c }}</label>
        </div>
        
        <div>
            <input type="radio" name="answer" id="answer-d">

            <span> ( d ). </span>
            <label for="answer-d">{{ d }}</label>
        </div>
        
        <div>
      
            <input type="radio" name="answer" id="answer-e">

            <span> ( e ). </span>
            <label for="answer-e">{{ e }}</label>
        </div>
    
    </form>
  
  </div>

</template>

<script>
export default {
    props : {
        no : String,
        question : String,
        a : String,
        b : String,
        c : String,
        d : String,
        e : String
    }, 
    mounted() {
        console.log('welcome');
        var timer = document.getElementById('timer');
        var second = 15;
        var minute = 1;
        var end = false;

        timer.innerHTML = `<span>${ minute }</span> : <span> ${second} </span>`;

        var clearer = setInterval(() => {
            if(second > 0){
                second = second - 1;
            } else if (second == 0) {
                if (minute > 0){
                    minute = minute - 1;
                    second = 60;
                } else if (minute == 0) {
                    end = true
                    clearit();
                }
               
            }
            
            if(end){
                timer.innerHTML = "Time's Up";
            } else {
                timer.innerHTML = `<span>${ minute }</span> : <span> ${second} </span>`;
            }
        }, 1000);
        function clearit() {
            clearInterval(clearer);
        }
    }
}


</script>

<style>

</style>