if (xhr.readyState === XMLHttpRequest.DONE) {
  const res = JSON.parse(xhr.responseText);
  console.log(res);
}

// Object { id: "fiyPR7wPZDd", joke: "When does a joke become a dad joke? When it becomes apparent.", status: 200 }
