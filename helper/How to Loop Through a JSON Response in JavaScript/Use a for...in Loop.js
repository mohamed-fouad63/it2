if (xhr.readyState === XMLHttpRequest.DONE) {
  const res = JSON.parse(xhr.responseText);

  for (const key in res) {
    if (obj.hasOwnProperty(key)) {
      console.log(`${key} : ${res[key]}`);
    }
  }
}
// id : H6Elb2LBdxc
// joke : What's blue and not very heavy?  Light blue.
// status : 200
/*
Please be aware that for...of loops will iterate over the entire prototype chain, so here we’re using hasOwnProperty to ensure that the property belongs to our res object.
*/
