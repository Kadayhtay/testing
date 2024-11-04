const countdown = () => {
    const birthdayDate = new Date("2024-11-10");
    const now = new Date();
    const timeDiff = birthdayDate - now;

    if (timeDiff > 0) {
        const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days.toString().padStart(2, '0');
        document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
        document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
    } else {
        // Hide the countdown and show the clickable link
        document.getElementById("countdown").style.display = "none";
        document.getElementById("birthday").style.display = "block";
        document.getElementById("birthdayLink").style.display = "block";
        document.getElementById("birthdayPresent").style.display = "block";
    }
};

// Update countdown every second
setInterval(countdown, 1000);
