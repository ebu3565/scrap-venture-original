<?php 
$pageTitle = "Current Scrap Rates - Scrap Venture";
include 'includes/header.php'; 
?>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Current Scrap Rates</h2>
            <p>Updated daily - Last updated: <?php echo date("F j, Y"); ?></p>
        </div>
        
        <div class="rates-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: var(--primary); color: white;">
                        <th style="padding: 15px; text-align: left;">Material</th>
                        <th style="padding: 15px; text-align: right;">Price per Kg</th>
                        <th style="padding: 15px; text-align: right;">Price per Piece</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">Newspaper</td>
                        <td style="padding: 15px; text-align: right;">৳12</td>
                        <td style="padding: 15px; text-align: right;">-</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">Cardboard</td>
                        <td style="padding: 15px; text-align: right;">৳10</td>
                        <td style="padding: 15px; text-align: right;">-</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">PET Bottles</td>
                        <td style="padding: 15px; text-align: right;">৳15</td>
                        <td style="padding: 15px; text-align: right;">৳0.50</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">HDPE Plastic</td>
                        <td style="padding: 15px; text-align: right;">৳20</td>
                        <td style="padding: 15px; text-align: right;">-</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">Aluminum Cans</td>
                        <td style="padding: 15px; text-align: right;">৳80</td>
                        <td style="padding: 15px; text-align: right;">৳2.00</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">Copper Wire</td>
                        <td style="padding: 15px; text-align: right;">৳450</td>
                        <td style="padding: 15px; text-align: right;">-</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 15px;">Steel</td>
                        <td style="padding: 15px; text-align: right;">৳35</td>
                        <td style="padding: 15px; text-align: right;">-</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px;">Mixed Electronics</td>
                        <td style="padding: 15px; text-align: right;">৳25</td>
                        <td style="padding: 15px; text-align: right;">-</td>
                    </tr>
                </tbody>
            </table>
            
            <p style="margin-top: 30px; text-align: center; color: var(--gray);">
                Note: Prices may vary based on quantity and quality. Contact us for bulk rates.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>