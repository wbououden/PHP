

<div class="row">
    <div class="large-8 medium-8 columns">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class="row">
            <div class="large-12 columns">
                <div class="callout panel">
                    <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-6 medium-6 columns">
                <div class="callout panel">
                    <p>Six columns</p>
                </div>
            </div>
            <div class="large-6 medium-6 columns">
                <div class="callout panel">
                    <p>Six columns</p>
                </div>
            </div>
        </div>
        <hr />

        <h5>We bet you&rsquo;ll need a form somewhere:</h5>
        <form>
            <div class="row">
                <div class="large-12 columns">
                    <label>Input Label</label>
                    <input type="text" placeholder="large-12.columns" />
                </div>
            </div>
            <div class="row">
                <div class="large-4 medium-4 columns">
                    <label>Input Label</label>
                    <input type="text" placeholder="large-4.columns" />
                </div>
                <div class="large-4 medium-4 columns">
                    <label>Input Label</label>
                    <input type="text" placeholder="large-4.columns" />
                </div>
                <div class="large-4 medium-4 columns">
                    <div class="row collapse">
                        <label>Input Label</label>
                        <div class="small-9 columns">
                            <input type="text" placeholder="small-9.columns" />
                        </div>
                        <div class="small-3 columns">
                            <span class="postfix">.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
