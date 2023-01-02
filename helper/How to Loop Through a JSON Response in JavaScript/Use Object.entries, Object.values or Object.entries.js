const res = JSON.parse(xhr.responseText);

Object.entries(res).forEach((entry) => {
  const [key, value] = entry;
  console.log(`${key}: ${value}`);
});

// id: SvzIBAQS0Dd
// joke: What did the pirate say on his 80th birthday? Aye Matey!
// status: 200
/*
Note that the const [key, value] = entry; syntax is an example of array destructuring that was introduced to the language in ES2015.
*/
