onload = () => {
  getAllData();
};

const getAllData = () => {
  const URL =
    "http://localhost/projects/php-employee-management-v1/src/library/employeeController.php?action=getAll";

  fetch(URL)
    .then((res) => res.json())
    .then((data) => {
      const dataEmployees = JSON.parse(data);
      console.log(typeof dataEmployees);
      const employeeRow = document.getElementById("employeeRow");
      const employeeId = document.createElement("td");
      const employeeName = document.createElement("td");
      const employeeEmail = document.createElement("td");

      employeeId.textContent = dataEmployees[8].id;
      employeeName.textContent = dataEmployees[8].name;
      employeeEmail.textContent = dataEmployees[8].email;

      employeeRow.append(employeeId);
      employeeRow.append(employeeName);
      employeeRow.append(employeeEmail);
    })
    .catch((error) => console.warn(error));
};

// ADD NEW EMPLOYEE
const Data = {
  id: 9,
  name: "",
  email: "",
};

function getEmployeeForm() {
  const addId = 9;
  document.getElementById("addName").addEventListener("change", function (e) {
    Data.name = e.target.value;
    console.log("Data.name", Data.name);
  });
  document.getElementById("addEmail").addEventListener("change", function (e) {
    Data.email = e.target.value;
  });
}
getEmployeeForm();

async function addEmployee() {
  const URL =
    "http://localhost/projects/php-employee-management-v1/src/library/employeeController.php?action=addEmployee";
  try {
    const response = await fetch(URL, {
      method: "POST",
      headers: { "content-type": "application/json; chartset=UTF-8" },
      body: JSON.stringify(Data),
    });
    const data = await response.text();
    console.log(data);
    return data;
  } catch (error) {
    console.error(error);
  }
  getAllData();
}

document.getElementById("addEmployee").addEventListener("click", function (e) {
  e.preventDefault();

  addEmployee();
});
