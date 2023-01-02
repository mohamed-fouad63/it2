const xhr = new XMLHttpRequest();
xhr.onreadystatechange = () => {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    console.log(typeof xhr.responseText);
    console.log(xhr.responseText);
  }
};
xhr.open("GET", "https://icanhazdadjoke.com/", true);
xhr.setRequestHeader("Accept", "application/json");
xhr.send(null);

// string
// {"id":"daaUfibh","joke":"Why was the big cat disqualified from the race? Because it was a cheetah.","status":200}
