function countdown() {
    const countDate = new Date("September 1, 2022 00:00:00").getTime();
    const currentDate = new Date().getTime(); 

    const gap = countDate - currentDate;
    const second = 1000;
    const minute = second * 60; 
    const hour = minute * 60;
    const day = hour * 24; 

    const gapSecond = Math.floor((gap%minute)/second);
    const gapMinute = Math.floor((gap%hour)/minute); 
    const gapHour = Math.floor((gap%day)/hour);
    const gapDay = Math.floor(gap/day); 

    document.querySelector("#secs p").innerText = ('0' + gapSecond).slice(-2); 
    document.querySelector("#mins p").innerText = ('0' + gapMinute).slice(-2); 
    document.querySelector("#hrs p").innerText = ('0' + gapHour).slice(-2); 
    document.querySelector("#days p").innerText = ('0' + gapDay).slice(-2); 
}

var page = (window.location.pathname).split("/").pop();
if (page == "construction-page.php") {
    setInterval(countdown, 1000); 
}