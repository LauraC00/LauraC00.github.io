<!--Variables-->
<?php $title = 'Film Submission Portal Design' ?>
<?php $name1 = 'Laura'; ?>
<?php $name2 = 'Lin'; ?>
<?php $doc = 'Document'; ?>
<?php $wf = 'Wireframe'; ?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .alt {
            background-color: #f2f2f2;
        }

        .tablinks {
            color: white;
            font-family: 'Montserrat', Helvetica, Arial, Lucida, sans-serif;
            font-size: 1.1rem;
        }

        footer {
            display: block;
            display: flex;
            justify-content: center;
        }
    </style>
    <title><?php echo $title?></title>
    <?php include './components/head.php'; ?>

</head>

<body>
    <!--Navigation menu with tabs-->
    <nav class="navbar bg-dark ps-3 py-4" id="navbar">

        <h1 class="display-6 text-white ms-5"><?php echo $title?></h1>
        <ul class="nav justify-content-end">

            <div class="tab me-5">
                <button class="tablinks btn btn-dark btn-outline-light" onclick="openTab(event, 'Document')"
                    id="defaultOpen">Document</button>
                <button class="tablinks btn btn-dark btn-outline-light"
                    onclick="openTab(event, 'Wireframe')">Wireframe</button>
            </div>
        </ul>
    </nav>

    <!--Content in 1st tab-->
    <div id="Document" class="tabcontent">
        <div class="container mb-5 mt-3">
            <h2 class="fs-4 text-white bg-dark py-3 ps-2"><?php echo $doc?></h2>

            <?php include './components/document.php'; ?>
        </div>
    </div>
    
    <!--Content in 2nd tab-->
    <div id="Wireframe" class="tabcontent">
        <div class="container mb-5 mt-3">
            <h2 class="fs-4 text-white bg-dark py-3 ps-2"><?php echo $wf?></h2>
            <div class="row mx-5 mt-3">
                <h2 class="fs-4">Description:</h2>
                <p> A wireframe showing all the steps involved in film submission, including the final step
                    which we came up with as what would be the last step in the user experience. Includes
                    clickable links.

                    <p>Wireframe by <?php echo $name1?> and <?php echo $name2?> <p>
            </div>
            <!--Display PDF-->
            <embed src="./components/Wireframe.pdf" type="application/pdf" width="100%" height="750" />
        </div>
    </div>

    <!--Javascript-->
    <script>
        function openTab(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <script>
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!--Footer-->
    <?php include './components/footer.php'; ?>

</body>

</html>