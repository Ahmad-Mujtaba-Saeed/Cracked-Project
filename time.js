    // This code is Vanilla JS, you can equivalently use jQuery
    // $(document).ready() or $(window).on()

    let timeSpentScrolling = 0;

    let isHalted = false;
    let haltedStartTime, haltedEndTime;
    let totalHaltedTime = 0;

    const update_halt_state = () => {
      if (isHalted) {
        isHalted = false;
        haltedEndTime = new Date().getTime()
        totalHaltedTime += (haltedEndTime - haltedStartTime) / 1000
      } else {
        isHalted = true;
        haltedStartTime = new Date().getTime()
      }
    }

    // Listen for scroll events
    window.addEventListener('scroll', () => {
      timeSpentScrolling += 1.8;

      update_halt_state()
    });


    document.addEventListener("DOMContentLoaded", () => {
      const start = new Date().getTime();

      // AVERAGE SCROLLING INTERVAL - 39 seconds
      setInterval(() => {
        if (new Date().getTime() - start > 39000) {
          update_halt_state()
        }
      }, 39000)

      window.addEventListener("beforeunload", () => {
        const end = new Date().getTime();

        update_halt_state()
        const totalTime = ((end - start) / 1000) - (timeSpentScrolling / 1000) - totalHaltedTime

       console.log(totalTime)
   
   $(document).ready(function(){
    $.post("./time.php",{
        time : totalTime
      },
      
      );
   });
  

      });

    });
