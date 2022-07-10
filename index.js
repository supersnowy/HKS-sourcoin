const button = document.querySelector(".metamask-btn");

const getAccount = async () => {    
    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    //console.log(window.ethereum.chainId);
    if (window.ethereum.chainId == "0x38") 
        console.log("Already connected to binance smart chain mainnet...");
    else {
        try {
            await ethereum.request({
                method: 'wallet_switchEthereumChain',
                params: [{ chainId: '0x38' }],
            });
        } catch (switchError) {
            // This error code indicates that the chain has not been added to MetaMask.
            if (error.code === 4902) {
                try {
                    await ethereum.request({
                        method: 'wallet_addEthereumChain',
                        params: [{
                            chainId: '0x38',
                            rpcUrl: netURL
                        }],
                    });
                } catch (addError) {
                    // handle "add" error
                }
            }
        }
    }

};

const addTokenToWallet = async (tokenSymbol, tokenAddress) => {
    let tokenImage;

    if (tokenSymbol == STAKE_TOKEN_COIN)
        tokenImage = SOUR_IMG;
    if (tokenSymbol == REWARDS_TOKEN_COIN)
        tokenImage = BLOCKS_IMG;

    if (window.ethereum) {
        try {
            await window.ethereum.request({
                method: "wallet_watchAsset",
                params: {
                    type: "ERC20",
                    options: {
                        address: tokenAddress,
                        symbol: tokenSymbol,
                        decimals: TOKEN_DECIMALS,
                        image: tokenImage,
                    },
                },
            });
        } catch (error) {
            console.log(error);
        }
    }
};

button.addEventListener("click", async () => {
    await getAccount();
    await addTokenToWallet(STAKE_TOKEN_COIN, STAKE_TOKEN_ADDR);
});
