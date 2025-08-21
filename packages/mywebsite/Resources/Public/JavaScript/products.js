function startCountdown(seconds, elementId) {
    let counter = seconds;
    const countdownEl = document.getElementById(elementId);

    if (!countdownEl) return; // exit if element not found

    countdownEl.textContent = counter; // initial value

    const interval = setInterval(() => {
        counter--;
        countdownEl.textContent = counter;

        if (counter <= 1) {
            clearInterval(interval);
        }
    }, 1000);
}
