(async () => {
  const res = await fetch("https://icanhazdadjoke.com/", {
    headers: { Accept: "application/json" },
  });
  const json = await res.json();
  Object.entries(json).forEach(([key, value]) => {
    console.log(`${key}: ${value}`);
  });
})();

// id: 2wkykjyIYDd
// joke: What did the traffic light say to the car as it passed? "Don't look I'm changing!"
// status: 200
/**
 *
 * The Fetch API returns a response stream. This is not JSON, so instead of trying to call JSON.parse() on it, we’ll need to use its response.json() function. This returns a Promise that resolves with the result of parsing the response’s body text as JSON.
 */
