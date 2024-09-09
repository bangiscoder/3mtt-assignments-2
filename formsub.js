document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();

    let userName = document.querySelector("[name='userName']").value;
    let comment = document.querySelector("[name='comment']").value;

    if(userName && comment) {
        alert(`Thank you, ${userName}! Your comment has been submitted.`);
    } else {
        alert("Please fill in all the fields.");
    }
});
