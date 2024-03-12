<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="tailwindcss-colors.css">
    <title>Saldo User</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font: inherit;
}
body {
    font-family: 'Inter', sans-serif;
    color: var(--gray-900);
    background-color: var(--gray-50);
}
.container {
    max-width: 10000px;
    margin: 0 auto;
    padding: 0 16px;
}

.payment-section {
    padding: 30px;


}

.payment-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 24px;
    background-color: var(--indigo-500);
    border-radius: 12px;
    padding-bottom: 72px;
}

.payment-header-content {
    flex-grow: 1;
    margin-right: 16px; 
}

.payment-header-title {
    font-size: 20px;
    font-weight: 600;
    color: var(--white);
    line-height: 1.4;
    margin-bottom: 4px;
}

.payment-header-description {
    font-size: 20px;
    color: var(--gray-200);
    line-height: 1.5;
}

.payment-method-items {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.image {
    height: 30px;
    width: 30px;
}

.payment-isi {
    font-size: 15px;
    color: white;
    margin-top: 4px; 
}

.payment-summary-divider-line {
    border: none;
    height: 1px;
    background-color: var(--gray-200);
    margin: 12px 0;
}


.payment-content {
    padding: 24px;
    margin-top: -64px;
    position: relative;
}
.payment-content::before {
    content: '';
    position: absolute;
    top: 24px;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% - 32px);
    height: 16px;
    border-radius: 4px;
    background-color: var(--indigo-600);
}
.payment-body {
    background-color: var(--white);
    border-radius: 0 0 8px 8px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, .05), inset 0 8px 0 rgba(0, 0, 0, .05);
    position: relative;
    padding-top: 8px;
    overflow: hidden;
}
.payment-plan {
    display: flex;
    align-items: center;
    padding: 12px;
}
.payment-plan-type {
    width: 40px;
    height: 40px;
    background-color: var(--indigo-500);
    color: var(--white);
    font-size: 13px;
    font-weight: 600;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    margin-right: 8px;
}
.payment-plan-info {
    width: 100%;
    margin-right: 8px;
    display: grid;
}
.payment-plan-info-price {
    font-weight: 600;
    font-size: 20px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.payment-summary-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 12px;
}

.payment-summary-datetime {
    display: flex;
    flex-direction: column;
    text-align: right;
}

.payment-summary-date,
.payment-summary-time {
    font-size: 12px;
    color: var(--gray-500);
}

.payment-summary-name {
    font-size: 15px;
    color: var(--gray-500);
}
.payment-summary-price {
    margin-bottom: 15px;
    padding: 3px 12px;
    font-weight: 500;
    font-size: 20px;
}
.payment-summary-divider {
    width: calc(100% - 16px);
    height: 0;
    margin: 12px auto;
    border-bottom: 1px dashed var(--gray-200);
    position: relative;
}
.payment-summary-divider::before {
    content: '';
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 100%;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: var(--gray-50);
    box-shadow: inset 0 2px 16px rgba(0, 0, 0, .05);
}
.payment-summary-divider::after {
    content: '';
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 100%;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: var(--gray-50);
    box-shadow: inset 0 2px 16px rgba(0, 0, 0, .05);
}
.payment-summary-total {
    padding-bottom: 16px;
}
.payment-summary-total .payment-summary-name {
    color: var(--gray-900);
}
.payment-summary-total .payment-summary-price {
    font-size: 16px;
    color: var(--indigo-500);
    font-weight: 600;
}




@media screen and (max-width: 767px) {
    .payment-header {
        flex-direction: column;
        align-items: flex-start;
    }
    .payment-header-content {
        margin-right: 0;
        margin-bottom: 16px;
    }
    .payment-content {
        padding: 16px;
    }
    .payment-content::before {
        top: 16px;
        width: calc(100% - 20px);
    }
    .payment-form-group-flex {
        display: block;
    }
}
    </style>
</head>
<body>
    <section class="payment-section">
        <div class="container">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-content">
                            <div class="payment-header-title">Saldo Paylink</div>
                            <p class="payment-header-description">Rp 710.000,00</p>
                        </div>
                        <div class="payment-method-items">
                            <a href="#"> 
                                <img src="images/icons8-plus-48.png" alt="" class="image">
                            </a>
                            <div class="payment-isi">Isi Saldo</div>
                        </div>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-price">Aktivitas</div>
                                </div>
                            </div>
                            <div class="payment-summary">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Pengeluaran</div>
                                    <div class="payment-summary-datetime">
                                        <span class="payment-summary-date">11-Mar-2024</span> 
                                        <span class="payment-summary-time">10:30 Pagi</span>   
                                    </div>
                                </div>
                                <div class="payment-summary-price">Rp 20.000,00</div>
                                <hr class="payment-summary-divider-line">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Pengeluaran</div>
                                    <div class="payment-summary-datetime">
                                        <span class="payment-summary-date">12-Mar-2024</span> 
                                        <span class="payment-summary-time">10:35 Pagi</span>    
                                    </div>
                                </div>
                                <div class="payment-summary-price">Rp 35.000,00</div>
                                <hr class="payment-summary-divider-line">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Pemasukkan</div>
                                    <div class="payment-summary-datetime">
                                        <span class="payment-summary-date">13-Mar-2024</span> 
                                        <span class="payment-summary-time">10:40 Pagi</span>   
                                    </div>
                                </div>
                                <div class="payment-summary-price">Rp 50.000,00</div>
                                <hr class="payment-summary-divider-line">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Pemasukkan</div>
                                    <div class="payment-summary-datetime">
                                        <span class="payment-summary-date">14-Mar-2024</span> 
                                        <span class="payment-summary-time">10:45 Pagi</span>    
                                    </div>
                                </div>
                                <div class="payment-summary-price">Rp 50.000,00</div>
                                <hr class="payment-summary-divider-line">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Pengeluaran</div>
                                    <div class="payment-summary-datetime">
                                        <span class="payment-summary-date">15-Mar-2024</span> 
                                        <span class="payment-summary-time">10:50 Pagi</span>    
                                    </div>
                                </div>
                                <div class="payment-summary-price">Rp 65.000,00</div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

</body>
</html>