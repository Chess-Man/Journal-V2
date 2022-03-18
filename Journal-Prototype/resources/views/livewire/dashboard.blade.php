<div>
    <main class="main-content">
        <div class="trade-logs">
            <div class="card-content">
                <div class="card-header">
                    <div class="first-child">
                        <h3>Trades</h3>
                        <p> Price: {{ $query_price }} </p>
                        <!-- <button class="btn-download"> <i class='bx bx-cloud-download' ></i> Export </button> -->
                    </div>
                    <button class="btn-add" id="myBtn"> <i class='bx bx-plus'></i> Add Trades </button>
                </div>
                <div class="card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td> <input type="checkbox" name="" class="check"> </td>
                                
                                <td>Date</td>
                                <td>Coin</td>
                                <td>Margin </td>
                                <td>Leverage</td>
                                <td>Type</td>
                                <td>Position</td>
                                <td>Time Frame</td>
                                <td>Opening </td>
                                <td>Closing </td>
                                <td>Win</td>
                                <td>P/L</td>
                                <td>Result</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td> <input type="checkbox" name="" class="check"> </td>
                                <td>March 18, 2022</td>
                                <td>BTC | USDT </td>
                                <td>146 USDT </td>
                                <td>10x</td>
                                <td>Scalping</td>
                                <td>Long</td>
                                <td>15 minutes</td>
                                <td>0.6687</td>
                                <td>0.7555</td>
                                <td>53 USDT </td>
                                <td>48%</td>
                                <td> 
                                    <span class="loss">Loss</span> 
                                </td>
                                <td  class="action">
                                    <i class='bx bx-edit-alt' ></i>
                                    <span>Edit</span>
                                </td>
                            </tr>
                        
                            <tr>
                                <td> <input type="checkbox" name="" class="check"> </td>
                                <td>March 19, 2022</td>
                                <td>ada | USDT </td>
                                <td>100 USDT </td>
                                <td>10x</td>
                                <td>Scalping</td>
                                <td>Long</td>
                                <td>15 minutes</td>
                                <td>0.6687</td>
                                <td>0.7555</td>
    
                                <td>50 usdt</td>
                                <td>50%</td>
                                    <td> 
                                    <span class="win">Win</span> 
                                </td>
                                 <td  class="action">
                                    <i class='bx bx-edit-alt' ></i>
                                    <span>Edit</span>
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    <!-- <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div> -->
                </div>
            </div>
        </div>
    </main>

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
        <div class="modal-content" wire.ignore>
            <div class="modal-header">   
                <h3>Add Trades</h3>
                <span class="close">&times;</span>
            </div>
            <form wire:submit.prevent="store">

                <div class="modal-body">

                        <input type="hidden" name="" wire:model.defer="query_price">
                       
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Coin</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Margin</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Leverage</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Position</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Time Frame</label>
                            <input type="text" name="" id="">
                        </div>
        
                        <div class="form-group">
                            <label for="">Opening</label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Closing</label>
                            <input type="text" name="" id="">
                        </div>
                </div>

                <button type="submit" id="btn-info">Add</button>
            </form>
        
        </div>

    </div>

    <script>
        var burl = "https://api.binance.com";
        var query = '/api/v3/ticker/price' ;

        query += '?symbol=BTCUSDT';

        var url = burl + query ;

        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET',url,true);

        ourRequest.onload = function(){

            console.log(ourRequest.responseText);
            
            var data = ourRequest.responseText;
            @this.query_price = "data";
        
        }

        ourRequest.send();
      
    </script>
</div>
