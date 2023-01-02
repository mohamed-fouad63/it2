const fs = require("fs");

const path = "../jsons/reg_to_sub.json";

fs.readFile(path, (error, data) => {
  if (error) {
    console.log(error);
    return;
  }
  console.log(data);
  const parsedData = JSON.parse(data);

  parsedData.createdAt = new Date().toISOString();

  fs.writeFile(path, JSON.stringify(parsedData, null, 2), (err) => {
    if (err) {
      console.log("Failed to write updated data to file");
      return;
    }
    console.log("Updated file successfully");
  });
});
