<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculators</title>
</head>
<body>
<fieldset id="calc1">
    <legend>Calculator 1</legend>
    <label for="num1"></label>
    <input type="text" id="num1"/>
    <select name="operation" id="operation">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select>
    <label for="num2"></label><input type="text" id="num2"/>
    <button id="equal">=</button>
    <div id="result1"></div>
</fieldset>

<fieldset id="calc2">
    <legend>Calculator 2</legend>
    <label for="num3"></label>
    <input type="text" id="num3"/>
    <label for="num4"></label><input type="text" id="num4"/>
    <button value="add" class="math_class" id="add">+</button>
    <button value="sub" class="math_class" id="sub">-</button>
    <button value="mul" class="math_class" id="mul">*</button>
    <button value="div" class="math_class" id="div">/</button>
    <div id="result"></div>
</fieldset>
<script>
  function getFirstCalcData() {
    return {
      num3: document.querySelector('#num1').value,
      num4: document.querySelector('#num2').value
    };
  }

  function getSecondCalcData() {
    return {
      num3: document.querySelector('#num3').value,
      num4: document.querySelector('#num4').value
    };
  }

  function sendRequest(sendData) {
    return fetch('server.php', {
      method: 'POST',
      body: JSON.stringify(sendData)
    }).then(result => result.json())
  }

  document.querySelector('#equal').addEventListener('click', () => {
    let finalObject = getFirstCalcData();
    finalObject.operation = document.querySelector('#operation').value;
    sendRequest(finalObject)
        .then(res => {
          document.querySelector('#result1').textContent = res.result;
        });
  });

  document.querySelector('#calc2').addEventListener('click', (event) => {
    let target = event.target;
    let finalObject = getSecondCalcData();
    finalObject.operation = target.value;
    sendRequest(finalObject)
        .then(res => {
          document.querySelector('#result').textContent = res.result;
        });
  });
</script>
</body>
</html>

