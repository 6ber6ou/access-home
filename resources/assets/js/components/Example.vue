<template>

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- COL MD 8 -->
            <div class="col-md-8 col-md-offset-2">

                <!-- PANEL -->
                <div class="panel panel-default">

                    <!-- PANEL HEADING -->
                    <div class="panel-heading">
                        Example Component
                    </div>
                    <!-- End ... PANEL HEADING -->

                    <!-- PANEL BODY -->
                    <div class="panel-body">
                        I'm an example component!
                    </div>
                    <!-- End ... PANEL BODY -->

                </div>
                <!-- End ... PANEL -->

            </div>
            <!-- End ... COL MD 8 -->

        </div>
        <!-- End ... ROW -->

    </div>
    <!-- End ... CONTAINER -->

</template>

<!-- ============================================================ -->

<script>

    export default
        {
        mounted()
            {

            console.log( 'Component ready.' )

            }

        }

</script>
