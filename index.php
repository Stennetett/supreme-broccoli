<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced HTML Template</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="style.css">
    <!-- Add your JavaScript files here -->
    <script src="script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>

<body>
    <header>
        <h1>dross</h1>

    </header>

    <main>
        <div id="time_date" style="width: 100%; height:10px;  padding-top: 5px; text-align: center;">


            <p style="color: white;"></p>

        </div>

        <img src="bell.svg" alt="">

        <section>
            <div id="black">
                <p id="left_p">

                </p>
                <p id="middle_p">

                </p>
                <p id="right_p">

                </p>


            </div>



            <script>
                // Initialize an empty array to store the random strings
                const randomStringsArray = [];
                const Sluttid_array = [];
                // Initialize an empty string to store the concatenated random strings
                let concatenatedStrings = '';
                let sluttid_string = '';
                //https://youtu.be/RfMkdvN-23o?si=vKwQORGIgN3zLjQl&t=960
                console.log("script is running")
                getData();
                async function getData() {
                    const response = await fetch('schema.csv');
                    const data = await response.text();

                    // console.log(data);
                    const table = data.split('\n');
                    table.forEach(row => {
                        const columns = row.split(',');
                        const klassrum = columns[1];
                        const Sluttid = columns[3];

                        // Check the data type of myVariable
                        var dataType = typeof columns[4];
                        // Push the random string into the array
                        randomStringsArray.push(klassrum);
                        Sluttid_array.push(Sluttid);
                        console.log(klassrum);

                    });

                    //det behövs ett br annars skrivs altting över hela tiden och sissta tiden syns enbart
                    console.log(randomStringsArray);
                    // Loop to generate random strings
                    for (let i = 0; i < randomStringsArray.length; i++) {

                        concatenatedStrings += randomStringsArray[i] + '<br>'; // Add a line break for each string
                        sluttid_string += Sluttid_array[i] + '<br>';

                        document.querySelector("#middle_p").innerHTML += " - " + '<br>';


                    }
                    // Get a reference to the <div> element with id "black"
                    const blackDiv = document.querySelector("#left_p");
                    const blackDiv_right = document.querySelector("#right_p");
                    // Get a reference to the <div> element with id "black"


                    // Set the innerHTML of the "black" element to the concatenated strings
                    blackDiv.innerHTML = concatenatedStrings;
                    blackDiv_right.innerHTML = sluttid_string;
                }
            </script>
        </section>

        <section>
            <div id="green">
                <p>green</p>
            </div>
        </section>

        <section>
            <div id="gold">
                <p>gold</p>
            </div>
        </section>

        <footer>
            <div id="blue">
                <p>blue</p>
            </div>
        </footer>




    </main>


</body>

</html>
<script>
    function updateClock() {
        var d = new Date(); // for now
        var hours = d.getHours();
        var minutes = d.getMinutes();
        var seconds = d.getSeconds();
        document.querySelector("#time_date> p").innerHTML = hours + ":" + minutes + ":" + seconds;
    }
    // Update the clock immediately and then refresh it every second
    updateClock();
    setInterval(updateClock, 1000); // 1000 milliseconds = 1 second'



 
</script>