// main triangle funcntion
function triangle(angle1, angle2, angle3) {
  let area = angle1 + angle2 + angle3;

  // condition start
  if (area > 180) {
    return ture;
  } else {
    return false;
  }
}

// run program with input
console.log(triangle(10, 40, 50));
