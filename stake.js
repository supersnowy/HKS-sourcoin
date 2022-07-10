let staker;
const button_stake = document.getElementById("btn_stake");
const button_unstake = document.getElementById("btn_unstake");
const stake_amount = document.getElementById("stake_amount");

const stakeLPTokens = async (stakeAmount) => {
    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    staker = accounts[0];
    console.log(staker);

    let _stakeAmount = stakeAmount * 1e17;
    await stakeToken.methods.approve(CONTRACT_ADDR, _stakeAmount).send({from: staker}, function (err, res){
        if (err) {
            console.log("An error occured", err);
            return;
        }
        console.log(res);
    });
    
    /*await stakeToken.methods.allowance(staker, CONTRACT_ADDR).call({from: staker}, function(err1, res1){
        if (err1) {
            console.log("An error occured", err1);
            return;
        }
        console.log("The allowance is " + res1);
    });*/

    await farming_contract.methods.stake(_stakeAmount).send({from: staker}, function (err2, res2) {
        if (err2) {
            console.log("An error occured", err2);
            return;
        }
        console.log(res2);
        alert("The operation for staking done successfully.");
    });
}

let canReward = false;
const unstakeLPTokens = async (stakeAmount) => {
    accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    staker = accounts[0];
    console.log(staker);

    let _stakeAmount = stakeAmount * 1e17;
    await farming_contract.methods.lastTimeRewardApplicable().send({from: staker}, function (err, res){
        if (err) {
            console.log("An error occured", err);
            return;
        }
        if (res < 0)
            canReward = true;
    });

    await farming_contract.methods.unstake(_stakeAmount).send({from: staker}, function (err1, res1) {
        if (err1) {
            console.log("An error occured", err1);
            return;
        }   
        alert("The operation for unstaking done successfully. Please wait to get rewards.");
    });

    if (canReward){
        await farming_contract.methods.exit().call({from: staker}, function(err2, res2){

        });
    }
    
}

button_stake.addEventListener("click", async () => {
    let stakeAmount = eval(stake_amount.value);
    await stakeLPTokens(stakeAmount);
});        

button_unstake.addEventListener("click", async () => {
    let stakeAmount = eval(stake_amount.value);
    await unstakeLPTokens(stakeAmount);
});
