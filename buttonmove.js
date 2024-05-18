//DROPPED THE JS -> MAYBE SOMEONE WILL FIND IT USEFUL :) (a transformation of the button - running away from the user)
const myDiv = document.getElementById("myDiv");
const button = myDiv.querySelector("button");

let moveDiv;

myDiv.addEventListener("mousemove", (event) => {
  const randomDistance = Math.floor(Math.random() * 20) + 10;
  const randomDirection = Math.random() * 2 * Math.PI;

  moveDiv = (event) => {
    const dx = event.clientX - myDiv.offsetLeft - button.offsetWidth / 2;
    const dy = event.clientY - myDiv.offsetTop - button.offsetHeight / 2;

    const distance = Math.sqrt(dx * dx + dy * dy);

    if (distance < randomDistance) {
      myDiv.style.transform = `translate(${randomDistance * Math.cos(randomDirection)}px, ${randomDistance * Math.sin(randomDirection)}px)`;
    } else {
      button.style.transform = `translate(${dx/2}px, ${dy/2}px)`;
    }
  };

  document.addEventListener("mousemove", moveDiv);
});

document.addEventListener("mouseup", () => {
  myDiv.removeEventListener("mousemove", moveDiv);
});
