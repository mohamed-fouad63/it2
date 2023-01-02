(async () => {
  async function getRepos(username) {
    const url = `https://api.github.com/users/${username}/repos`;

    const response = await fetch(url);
    const repositories = await response.json();

    return repositories;
  }

  const repos = await getRepos("jameshibbard");
  console.log(repos);
})();

// Array(30) [ {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, … ]
/**
 * As you can see, the API has returned an array of objects. To access each of the individual objects, we can use a regular forEach method:
 */

repos.forEach((repo) => {
  console.log(`{$repo.name} has ${repo.stargazers_count} stars`);
});

// Advanced-React has 0 stars
// angular2-education has 0 stars
// aurelia-reddit-client has 3 stars
// authentication-with-devise-and-cancancan has 20 stars
// ...
/**
 * Alternatively, you can of course use any of the methods discussed above to loop through all of the object’s properties and log them to the console:
 *
 */
repos.forEach((repo) => {
  Object.entries(repo).forEach(([key, value]) => {
    console.log(`${key}: ${value}`);
  });
});

// name: Advanced-React
// full_name: jameshibbard/Advanced-React
// private: false
// ...
/**
 * https://www.sitepoint.com/loop-through-json-response-javascript/
 */
