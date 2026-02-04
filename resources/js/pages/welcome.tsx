export default function Welcome() {
    return (
        <>
            <div className="box-content border-4">
                <input type="text" placeholder="Type here" className="input input-lg" />
            </div>
            <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center' }}>
                <form>
                    <input className="btn" type="checkbox" name="frameworks" aria-label="Close" />
                    <input className="btn btn-square" type="reset" value="×" />
                </form>
            </div>
            <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center' }}>
                <div>
                    <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center' }}>
                        <div>Bild</div>
                        <div>Titel och plats</div>
                        <div>Pris och leverans</div>
                    </div>
                </div>
            </div>
        </>
    );
}
